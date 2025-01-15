# Prueba Laravel - Full-Stack

Este es un proyecto de ejemplo para gestionar tareas usando Laravel. La aplicación permite a los usuarios registrarse, iniciar sesión, y gestionar una lista de tareas.

## Requisitos

- PHP >= 8.2
- Composer
- MySQL o cualquier base de datos soportada por Laravel

## Instalación

### 1. Clonar el repositorio

Primero, clona el repositorio a tu máquina local:

git clone [https://github.com/tu-usuario/nombre-del-proyecto.git](https://github.com/caarenasm/aloti-prueba.git)
cd aloti-prueba

### 2. Instalar las dependencias de PHP

Asegúrate de tener Composer instalado en tu máquina. Luego, instala las dependencias de PHP:

composer install

### 3. Configurar el archivo .env

Copia el archivo .env.example a .env:
cp .env.example .env

Edita el archivo .env y configura las variables de entorno, especialmente las relacionadas con la base de datos:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

### 4. Generar la clave de la aplicación

Laravel necesita una clave de aplicación única, que puedes generar con el siguiente comando:
php artisan key:generate

### 5. Migrar la base de datos

A continuación, ejecuta las migraciones para crear las tablas necesarias en la base de datos:
php artisan migrate

Si también tienes datos de prueba o seeders, puedes ejecutarlos con:
php artisan db:seed

### 6. Servir la aplicación

Una vez que todo esté configurado, puedes iniciar el servidor de desarrollo de Laravel:
php artisan serve

Esto iniciará la aplicación en http://localhost:8000

### 7. Probar el Proyecto

Accede al sistema: Abre tu navegador y visita http://localhost:8000.

Registro de usuario: Ve a la página de registro (/register) y crea una cuenta.

Inicio de sesión: Ve a la página de inicio de sesión (/login) e ingresa con las credenciales que registraste.

Gestionar tareas: Accede a la lista de tareas (/tasks) y prueba las funciones de crear, editar, y eliminar tareas.
