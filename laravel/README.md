# Crear un proyecto por comandos en Laravel.
1. Para crear el proyecto con Laravel, utilizamos el siguiente comando: `composer create-project laravel/laravel example-app`. donde 'example-app' lo cambiamos por el nombre que queramos para nuestra aplicación.

2. Abrimos el proyecto y ejecutamos `npm install` para tener las dependencias de Node.js actualizadas.

3. Si queremos utilizar el server de Laravel, utilizamos el comando `php artisan server`, pero puedes utilizar el que prefieras.

4. Para controlar el registro de usuario, necesitamos una Base de Datos con los usuarios que inician sesión. Configuramos el archivo que cuelga de la carpeta raiz `.env` y ejecutamos el siguiente comando para crearla: `php artisan migrate` ó el comando `php artisan migrate:refresh` para borrar la que uses con anterioridad y volver a crearla.

5. Para instalar Breeze debemos completar los siguientes puntos:
- Ejecutar el comando para intalar el paquete: `composer require laravel/breeze --dev`
- Instalamos breeze: `php artisan breeze:install`
- Para terminar, instalamos los paquetes de Node.js necesarios con : `npm install && npm run dev`.

6. Crear ruta.... 

7. Modificar navbar ... en las rutas se pone SIEMPRE EL NOMBRE !!!

8. Para crear un controlador, utilizamos el comando: `php artisan make:controller nombreController --invokable ` donde 'nombreController' se cambia por el nombre que queramos. Podemos quitar el '--invokable' si no queremos que cree el invocador por defecto. Para crear el controlador con las clases precreadas, utilizamos la extensión `--resource`.

9. Para crear un middleware, utilizamos el comado: `php artisan make:middleware NameMiddleware`. Los middleware se guardan en http->Controllers->Middleware.

10. Una vez creado y configurado nuestro middleware, debemos añadirlo en el kernel de la aplicación que se encuentra en la ruta: `\app\Http\Request\Kernel.php`

11. Crear  una nueva migración: Para hacer la migración utilizamos el comando: `php artisan make:migration crearTabla`. Hay muchos comandos para organizar nuestras tablas y migraciones, por lo que es recomendable seguir desde [la documentación oficial](https://laravel.com/docs/8.x/migrations). Un ejemplo de creación de una migración es `php artisan make:migration create_frutas_table --create frutas `.
	- Para renombrar las tablas, podemos uitizar `php artisan make:migration add_field_frutas --table=frutas`. donde la tabla es el nombre que le hemos dado. Completamos los datos con los deseados y utilizamos el comando `php artisan migrate` para volver a ejecutar la tabla.
	- En caso de error, necesitamos el driver de 'doctrine', que podes descargarlo o añadirlo en el `composer.json` de la carpeta raíz.

12. Hacer migración: Para llevar a cabo la migración, utilizamos el comando `php artisan migrate`. Tambien podemos usar `php artisan migrate:refresh ` donde elimina las tablas y las crea de nuevo.
	- Podemos ver el estado de las migraciones con: `php artisan migrate:status `.
	- A la hora de cambiar los campos de una migración, debemos tener en cuenta las claves foráneas (fk), porque tienen que tener una nomenclatura especial: `nombreClase_id` ,donde cambiamos la nombreClase por el nombre de la tabla que hemos asignado.
	- Después, asisgamos la siguiente linea: `$table->foreign('user_id')->references('id')->on('users');`

13. Para llevar un control de las bases de datos y permitir la opción de hacer pruebas (entre otras cosas), podemos usar las semillas ('seed' en inglés). El fichero que utilizamos normalmente para las pruebas es `database/seeders/DatabaseSeeder.php`. Para ejecutar los datos de prueba, utilizamos los comandos `php artisan db:seed`
	- Si queremos hacer un seeder nuevo, debemos llamarlo en el `DatabaseSeeder.php` para que pueda ejecutarse.

14. Crear un modelo `php artisan make:model nombreModelo`, donde nombreModelo lo cambiamos por el deseado. Es obligatorio que comience por mayúscula el nombre del modelo, y en singular y en INGLES !!.

## Request
Para crear nuestras request, utilizamos el siguiente comando:
1. `php artisan make:request ValidationFormRequest`
2. Entramos en el archivo que se a creado dentro de `\app\Http\Request\ValidationFormRequest` y cambiamos la autorización a 'true'.

## Gestión de subida de archivos.
Todos los archivos que subimos desde Laravel, se guardan en la carpeta Storage. El problema es que no podemos llegar a la ruta donde se guarda por falta de permisos, por lo que debemos usar un enlace simbolico para ver dichos archivos. (Por ejemplo una imagen).
El comando para hacer un enlace simbólico es: `php artisan storage:link`.

- Muy importante: cada vez que cambiemos el directorio de sitio, debemos borrar dicha carpeta y volver a crear el enlace simbólico.

