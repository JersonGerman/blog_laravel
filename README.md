<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## Blog admin - Laravel 10 livewire
Este proyecto es un panel administrativo para dar mantenimiento (CRUD) a las entradas de un blog, 
Se utilizo la versión 10 de Laravel con componentes Jestrean y Liwewire. Estilos por defecto de Tailwind y MYSQL para la conexión a una base de datos
<hr>

### Requisitos para este proyecto
* Composer v2.5.5 ó <=
* Nodejs v18.15.0 <=
* [XAMPP](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.17/xampp-windows-x64-8.1.17-0-VS16-installer.exe) (Omitir PHP y MYSQL)
* PHP 8.1.17
* MYSQL

### Pasos para levantar el proyecto
1. Instalar Git y clonar el repositorio
```
git clone https://github.com/JersonGerman/blog_laravel.git
```
2. Instalar las dependencias con el comando composer
```
composer install
```
3. Instalar dependencias con el comando npm
```
npm install
```
4. Duplicar el archivo `.env.example` y renombrarlo a `.env`
5. Crear una base de datos en mysql y modificar el contenido del archivo `.env` con tus credenciales de conexion
6. Opcional: Crearte un dominio local para agregarlo a la variable de entorno `APP_URL`. example http://blog.test
7. Generar una KEY para la variable de entorno `APP_KEY`
```
php artisan key:generate
```
8. Ejecutar el comando de artisan para hacer la migración de la base de datos
```
php artisan migrate
```
9. Ejecutar la migración con datos de prueba con el siguiente comando
```
php artisan migrate:fresh --seed
```
### Ejecución 
10. Activar Apache y MYQSL
11. Ejecutar el comando
```
npm run dev
```
12. Ingresar a la url http://localhost/blog_laravel/public