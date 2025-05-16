FROM php:8.3-apache

# Instalar dependências e extensões necessárias
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    curl \
    git \
    libcurl4-openssl-dev \
    pkg-config \
    libssl-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

# Instalar a extensão MongoDB via PECL
RUN pecl install mongodb \
    && echo "extension=mongodb.so" > /usr/local/etc/php/conf.d/mongodb.ini

# Ativar mod_rewrite do Apache
RUN a2enmod rewrite

# Instalar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www/html

# Copiar todos os arquivos para dentro do contêiner, incluindo o diretório public
COPY . /var/www/html

# Copiar o arquivo de configuração do VirtualHost
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf


# Certifique-se de que as pastas storage e public existem e aplicar permissões
RUN mkdir -p /var/www/html/storage && chown -R www-data:www-data /var/www/html/storage && chmod -R 775 /var/www/html/storage
RUN chown -R www-data:www-data /var/www/html/public && chmod -R 775 /var/www/html/public

# Corrigir permissões para o diretório raiz
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

EXPOSE 80
