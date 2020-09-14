# GUX Test

### Requisitos 
- php >= 7.3
- [composer 1.10.x](https://getcomposer.org/download/)
- [Laravel 8.x](https://laravel.com/docs/8.x/installation)

### Environment
```sh 
$ composer install
$ cp .env.example .env
```

### Migraciones
```sh 
$ php artisan migrate:fresh
```

### Seeders (Carga de datos en la DB)
Obs: 
- Se cargan marcas, modelos. 
- Para el caso de las versiones se generan 80 registors mediante un faker
- Para todos los casos son fakers 

```sh 
$ php artisan db:seed --class VehiculoSeeder 
```

### Iniciar Servidor
```sh 
$ php artisan serve
```


### API  (endpoints) - DEMO
- [Marcas](http://gux-test.ivanfretes.me/api/v1/marcas)
- [modelos](http://gux-test.ivanfretes.me/api/v1/modelos)
- [Versiones](http://gux-test.ivanfretes.me/api/v1/versiones)

**Visualizar todos los atributos de una version**
[Version 1 ](http://gux-test.ivanfretes.me/api/v1/versiones/1)

**Parametros del api/v1/filtros**
- precio_min : Numero
- precio_max : Numero
- cilindraje_min : Numero
- cilindraje_max : Numero
- tipo_combustible : Cadena => "1,2,4,7"
- velocidad_automatica : Numero
- bluetooth : si o no

[Filtros](http://gux-test.ivanfretes.me/api/v1/filtros)
