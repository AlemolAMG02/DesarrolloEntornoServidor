#Crear un proyecto por comandos en Laravel.
1. Para crear el proyecto con Laravel, utilizamos el siguiente comando: `composer create-project laravel/laravel example-app`. donde 'example-app' lo cambiamos por el nombre que queramos para nuestra aplicación.
2. Abrimos el proyecto y ejecutamos `npm install` para tener las dependencias de Node.js actualizadas.
3. Si queremos utilizar el server de Laravel, utilizamos el comando `php artisan server` , pero puedes utilizar el que prefieras.
4. Para controlar el registro de usuario, necesitamos una Base de Datos con los usuarios que inician sesión. Configuramos el archivo que cuelga de la carpeta raiz `.env` y ejecutamos el siguiente comando para crearla: `php artisan migrate` ó el comando `php artisan migrate:refresh` para borrar la que uses con anterioridad y volver a crearla.

5. Para instalar Breeze debemos completar los siguientes puntos:
- Ejecutar el comando para intalar el paquete: `composer require laravel/breeze --dev`
- Instalamos breeze: `php artisan breeze:install`
- Para terminar, instalamos los paquetes de Node.js necesarios con : `npm install && npm run dev`.

6. Crear ruta.... 
7. Modificar navbar ... en las rutas se pone SIEMPRE EL NOMBRE !!!
8. Para crear un controlador, utilizamos el comando: `php artisan make:controller nombreController --invokable ` donde 'nombreController' se cambia por el nombre que queramos. Podemos quitar el '--invokable' si no queremos que cree el invocador por defecto. Para crear el controlador con las clases precreadas, utilizamos la extensión `--resource`.
9.