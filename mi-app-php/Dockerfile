# Usa una imagen oficial de PHP que ya trae un servidor web Apache instalado
FROM php:8.2-apache

# Copia todos los archivos de tu carpeta actual (los .php) hacia la carpeta pública del servidor dentro del contenedor
COPY . /var/www/html/

# Exponemos el puerto 80, que es el puerto por defecto de las páginas web
EXPOSE 80

