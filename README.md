# DOCKER CONFIG UNTUK LARAVEL

Root folder information

```

LARAVEL
|-- app.dockerfile
|-- web.dockerfile
|-- laravelVHost.conf
|-- docker-compose.yml
|-- app
|-- resources
|-- And the other.....


```

## automatic create a image for app (source code image) & web (webserver config image)

```
 $ docker-compose up -d 

```
## Database 
Database terdapat pada file db atau menggunakan fitur migrate pada laravel
$ php artisan migrate

