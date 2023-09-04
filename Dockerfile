# Use a imagem base PHP com Apache4
FROM php:8.2-apache

# Copie o conteudo da pasta app para o diretório do servidor web
COPY app/ /var/www/html/

# Copie o conteudo da pasta src para o diretório do servidor web
COPY src/ /var/www/src/

# Instale a extensão MySQLi no PHP
RUN docker-php-ext-install mysqli

# Exponha a porta 80 para o servidor web
EXPOSE 80