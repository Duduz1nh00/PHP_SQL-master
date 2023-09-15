# Use a imagem base PHP com Apache4
FROM php:8.2-apache

# Copie o arquivo de configuração personalizado para o diretório de configuração do Apache
COPY apache-config.conf /etc/apache2/conf-available/

# Ative o arquivo de configuração personalizado
RUN a2enconf apache-config

# Defina o diretório de trabalho como /var/www/html
WORKDIR /var/www/html

# Copie o conteudo da pasta app para o diretório do servidor web
COPY app/ .

# Copie o conteudo da pasta src para o diretório do servidor web
COPY src/ .

# Copie o conteudo da pasta public para o diretório do servidor web
COPY public/ .

# Instale a extensão MySQLi no PHP
RUN docker-php-ext-install mysqli

# Att do apache
RUN apt-get update && apt-get install -y apache2

# Exponha a porta 80 para o servidor web
EXPOSE 80