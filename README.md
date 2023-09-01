<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# CRUD - Producto
--
### CRUD 

Funciones:
- Retornar lista de productos
- Registrar productos
- Actualizar productos
- Eliminar

Estas funciones se implementan en una Interfaz donde se aplicaron estilos simples desde Bootstrap. Esta interfaz muestra la lista de los datos de todos los productos (id, name, price, status stock) almacenados en una base de datos en un servidor Mysql. 

Para la ejecución de la aplicación es necesario tener instalado:
- XAMPP (Apache + MariaDB + PHP + Perl)
- Compose
- Node y NPM
- Git

## Ejecutar aplicación 

- Desde el panel de control de XAMPP iniciar servidores Apache y Mysql 

- Clonar Repositorio

- Instalar dependencias
```
composer install
```


```
php artisan serve
```