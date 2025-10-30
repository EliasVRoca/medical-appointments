# Sistema de Gestión de Citas Médicas

Este proyecto es una aplicación web desarrollada en Laravel para la gestión de citas médicas. Permite a los usuarios administrar citas, pacientes y profesionales médicos de manera eficiente y segura.

## Características principales

- Autenticación y registro de usuarios (Jetstream, Fortify)
- Panel administrativo para gestión de citas
- Interfaz moderna con Livewire y WireUI
- Soporte para notificaciones y manejo de usuarios
- Internacionalización (soporte para español)

## Requisitos

- PHP >= 8.1
- Composer
- Node.js y npm/pnpm
- Base de datos MySQL/MariaDB

## Instalación

1. Clona el repositorio:
	```bash
	git clone <url-del-repositorio>
	cd citas
	```
2. Instala dependencias de PHP:
	```bash
	composer install
	```
3. Instala dependencias de Node.js:
	```bash
	npm install
	# o
	pnpm install
	```
4. Copia el archivo de entorno y configura tus variables:
	```bash
	cp .env.example .env
	```
5. Genera la clave de la aplicación:
	```bash
	php artisan key:generate
	```
6. Configura la base de datos en `.env` y ejecuta migraciones:
	```bash
	php artisan migrate
	```
7. Compila los assets:
	```bash
	npm run build
	# o
	pnpm run build
	```

## Uso

1. Inicia el servidor de desarrollo:
	```bash
	php artisan serve
	```
2. Accede a la aplicación en tu navegador: [http://localhost:8000](http://localhost:8000)

## Estructura del proyecto

- `app/` - Lógica de la aplicación y modelos
- `routes/` - Definición de rutas web y API
- `resources/views/` - Vistas Blade
- `public/` - Archivos públicos y assets
- `config/` - Archivos de configuración
- `database/` - Migraciones, seeders y factories

## Dependencias principales

- Laravel Framework
- Jetstream, Fortify, Sanctum
- Livewire, WireUI
- TailwindCSS, Vite

## Licencia

Este proyecto está bajo la licencia MIT.
