# Usa a imagem oficial do PHP com Apache.
FROM php:8.2-apache

# Define o diretório de trabalho.
WORKDIR /var/www/html

# INSTALAÇÃO DE DEPENDÊNCIAS E EXTENSÕES
# Corrigido adicionando a biblioteca libicu-dev
RUN apt-get update && apt-get install -y \
      libpng-dev \
      libjpeg62-turbo-dev \
      libfreetype6-dev \
      libzip-dev \
      libicu-dev \
      zip \
      unzip \
      && docker-php-ext-configure gd --with-freetype --with-jpeg \
      && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql zip intl \
      && apt-get clean \
      && rm -rf /var/lib/apt/lists/*

# INSTALAÇÃO DO COMPOSER
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# COPIANDO OS ARQUIVOS DA APLICAÇÃO
COPY composer.json composer.lock* ./
RUN composer install --no-interaction --no-plugins --no-scripts --prefer-dist
COPY . .

# AJUSTE DE PERMISSÕES (Opcional)
# RUN chown -R www-data:www-data storage bootstrap/cache