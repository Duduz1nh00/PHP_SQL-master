# Use a imagem base PHP com Apache4
FROM php:8.2-apache

# Copie o conteudo da pasta app para o diretório do servidor web
COPY ./app/ /var/www/html/

# Copie o conteudo da pasta classes para o diretório do servidor web
COPY ./classes/ /var/www/classes/

# Instale a extensão MySQLi no PHP
RUN docker-php-ext-install mysqli

# Exponha a porta 80 para o servidor web
EXPOSE 80