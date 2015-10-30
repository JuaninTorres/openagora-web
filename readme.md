## Sitio Web de Openagora en Laravel

Por qué hacerlo con Laravel?, simplemente porque se puede y punto.

### Para poder tenerlo en ambiente de desarrollo
```
cp .env.example .env
php artisan key:generate
```
Configurar todas las variables de entorno en el archivo `.env`

```
composer install
php artisan migrate
```
Con ésto instalamos las dependencias de `composer` y ejecutamos lo necesario para tener la estructura de la Base de Datos 

```
npm install
```
Instalamos las dependencias de node.js

```
bower install
```
Instalamos las dependencias de `bower` que son librerías de `JS` y `CSS`.

