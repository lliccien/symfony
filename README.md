Symfony Esencial
================

Este repositorio tiene la instalación basica de symfony y bundles y configuraciones esenciales para inicial cualquier desarrollo

Docker
------

#Contenedor de Mysql

Comando para crear el contenedor basado en la imagen offical y con la colección de caracteres en utf8

    docker run --name mysql -e MYSQL_ROOT_PASSWORD=123456 -d mysql --character-set-server=utf8 --collation-server=utf8_general_ci

#Contenedor php

Comando para crear el contenedor basado en la imagen [lliccien/docker-symfony-drupal](https://github.com/lliccien/Docker-Symfony-Drupal) especialmente ajusta para trabajar con symfony

    docker run -p 80:80 -v ~/www/symfony:/var/www/html --name symfony --link mysql:mysql -d lliccien/docker-symfony-drupal:latest 



#Configuracion inicial de symfony

* Se utilizo el comando umask(0000) para resolver la permisologio y acceso a los archivos y directorios de symfony

    