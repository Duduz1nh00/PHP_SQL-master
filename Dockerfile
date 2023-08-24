# Use a imagem base PHP com Apache4
FROM php:8.2-apache

WORKDIR /app

# Copie o arquivo index.php para o diretório do servidor web
COPY ./app/index.php /var/www/html/

# Instale a extensão MySQLi no PHP
RUN docker-php-ext-install mysqli

# Exponha a porta 80 para o servidor web
EXPOSE 80