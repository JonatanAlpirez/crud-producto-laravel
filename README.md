--
# CRUD - Producto
--

### CRUD 

Funciones:
- Retornar lista de productos
- Registrar productos
- Actualizar productos
- Eliminar

Esta aplicación fue desarrollada con Laravel y sus funciones se implementan en una interfaz donde se aplicaron estilos simples con Bootstrap. Esta interfaz muestra la lista de los datos de todos los productos (id, name, price, status stock) almacenados en una base de datos en un servidor Mysql. Se pueden crear nuevos productos que se almacenaran en la base de datos,  también se puede editar los datos de productos existentes y borrar los registros.

Para la ejecución de la aplicación es necesario tener instalado:
- XAMPP (Apache + MariaDB + PHP + Perl)
- Compose
- Node y NPM
- Git

--
## Ejecutar aplicación 
(los comandos se ejecutan desde la terminal del directorio del proyecto).

- Desde el panel de control de XAMPP iniciar servidores Apache y Mysql 

- Clonar Repositorio

- Instalar dependencias
```
composer install
```
```
npm install
```

- Copiar archivo `.env`
```
cp .env.example .env
```
    - Asegurarse que en archivo .env se encuentre la siguiente configuración:
```
DB_DATABASE=producto
```

- Desde `localhost/phpmyadmin/` crear la base de datos `producto`

- Generar application key:
```
php artisan key:generate
```
- Hacer las migraciones
```
php artisan migrate
```
- Correr Servidor
```
php artisan serve
```
```
npm run dev
```

- La aplicación se ejecuta en la dirección:
http://localhost:8000/



