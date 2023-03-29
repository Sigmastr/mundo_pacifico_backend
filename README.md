# Backend prueba técnia Mundo

# Requisitos
- xampp

Clonar este repositorio en la carpeta "C:/xampp/htdocs"
- Realizar cd .\mundo_pacifico_backend\

Iniciar procesos de xampp
-Apache
-MySQL

Abrir terminal en la ubicación del proyecto y realizar composer install

Posteriormente, ingresar los siguientes comandos
- cp .env.example .env
- php artisan key:generate

Una vez realizado estos pasos, continuaremos con la configuración de la base de datos.

#Configuración de la Base de Datos

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mundo_pacifico_tecnica
DB_USERNAME=root
DB_PASSWORD=

Con esto termina la configuración.

#Puesta en marcha de la API

En la terminal, realizar las migraciones

Luego ejecutar los Seeders
-php artisan migrate:fresh
-php artisan db:seed


#Requisitos
- php 7.3.2
- composer 2.4.4
- Base de datos Mysql
- xampp
