# Pagina web: Game Center

========

Para esta página escogí una temática de tienda de juegos, simplemente carga juegos (titulo, información y una imagen), información de **Nosotros**, una pequeña información para la página inicial y la dirección en la página de contacto. Incluye un pequeño administrador.

Fue realizada en Laravel 5.5 con Laravel Collective, utilizando una plantilla de [w3layouts.com](http://w3layouts.com) llamada [Games Center](https://w3layouts.com/games-center-a-games-category-flat-bootstrap-responsive-web-template/) y para el administrador utilicé la plantilla [SB Admin](https://startbootstrap.com/template-overviews/sb-admin/) de [startbootstrap.com](https://startbootstrap.com/).

## Configuración:

1) Crear una Base de Datos en MySQL llamada "**gamescenter**" (ver el archivo .env si se desea modificar la conexión a la base de datos).

2) Abrir la consola en la carpeta y colocar `php artisan migrate --seed`, para que configure la base de datos y las semillas con algunos datos a modo de prueba que dejé.

3) Para que envié correos yo dejé todo listo para que trabaje con GMAIL, solo hay que modificar en el archivo .env el **MAIL_USERNAME** y el **MAIL_PASSWORD** con un correo gmail que prefieran, adicionalmente para que GMAIL lo permita, entrar a [https://myaccount.google.com/security?pageId=none#connectedapps](https://myaccount.google.com/security?pageId=none#connectedapps) y activar la opción "**Permitir el acceso de aplicaciones menos seguras**".

4)  En el controlador de Correos hay que especificar unas direcciones para que funcione, yo las dejé comentadas, se puede omitir eliminando el **from** de cada envió de correo.

5) para ejecutar el servidor: `php artisan serve`

La ruta hacia el controlador es: `app\Http\Controllers\Correos.php`.

Dirección de la página: `http://localhost:8000` Dirección del Administrador: `http://localhost:8000/admin`

Parte de la configuracion de mi archivo .env para los correos :

`MAIL_DRIVER=smtp`

`MAIL_HOST=smtp.gmail.com`

`MAIL_PORT=587`

`MAIL_USERNAME=`

`MAIL_PASSWORD=`

`MAIL_ENCRYPTION=tls`
