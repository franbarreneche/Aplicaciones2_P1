# PROYECTO 1 (RECICLADO CORONEL SUAREZ)

## General

Proyecto de la comisión 3 para la cátedra Aplicaciones 2 de la UPSO (2021).
El sistema consiste en una web app para el manejo de centros de reciclado en la ciudad de Coronel Suárez.

## Contenido

1. Conexion a BD
2. Login (front y backend)
3. Manejo de errores en el login
4. Roles

## Pasos para instalar

1. Clonar el Proyecto
2. Instalar y/o actualizar Composer y PHP.
3. Dentro de la carpeta del proyecto ejecutar el comando `composer install`
4. Renombrar el archivo ".env.example" a sólo ".env" y modificar la configuración del mismo de acuerdo al entorno que esté usando (principalmente lo relacionado con la BD). Por defecto, está preparado para usar PostgreSQL, el nombre de la DB es "reciclado_cs" y las credenciales son USUARIO=postgres, PASS=root
5. Dentro del a carpeta del proyecto ejecutar el comando: `php artisan migrate --seed`
6. Finalmente, arrancar el server con el comando: `php artisan serve`
