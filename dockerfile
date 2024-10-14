# Usa la imagen oficial de PHP con Apache
FROM php:8.1-apache

# Copia los archivos de la carpeta local a la carpeta pública de Apache
COPY ./src /var/www/html/

# Instala extensiones de PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Exposición del puerto para Apache
EXPOSE 80