## Bienvenido al proyecto Back-end de Laravel 8.0
**Instalacion:**

Crear una directorio con el nombre mundo pacifico en el equipo local
`mkdir mundopacifico`

Ingresar al directorio desde la linea de comandos
`cd mundopacifico`

Clonar repositorio al equipo destino
 `git clone https://github.com/amipax/laravelapi.git`

Ingresar al directorio del proyecto backend creado
`cd laravelapi`

 instalar composer usando el siguiente comando:
`composer install`

Instalar paquete laravel-cors:
`composer require fruitcake/laravel-cors`

Crear archivo .env
`cp .env.example .env`

Los valores de entorno son (entorno de pruebas) :
*DB_DATABASE=proyectodb*
*DB_USERNAME=root*
*DB_PASSWORD=*

Migracion y Seeders
 ` php artisan migrate:fresh --seed`

Ejecutar servidor de pruebas
`php artisan serve`

