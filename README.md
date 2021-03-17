<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Historial de cambios
- About terminado: ver datos y actualziar.
- Proyectos / Textos terminado: ver datos y actualziar.
- Socios terminado: ver datos, actualziar, borrar y crear.
- Equipo terminado: ver datos, actualziar, borrar y crear.
- Contacto terminado: ver datos y actualziar.
- Proyectos / Imagenes terminado: ver datos, actualizar y crear.

## Pendientes



## Actualizar
Para mantener el proyecto en la última versión:

```
git pull origin main
```
Crear el enlace simbólico para ver la carpeta Storage directamente en Public
```
php artisan storage:link
```
Actualizar migraciones y poblar la base de datos
```
php artisan migrate:refresh --seed
```