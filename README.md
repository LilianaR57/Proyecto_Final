Proyecto de Laravel 12
Docker, mysql, redis, apache, phpmyadmin
Requisitos: docker, docker-compose
Configuración:

# Terminal
  git clone https://github.com/Augus70/laravel-docker.git
  cd laravel-docker
  docker-compose build
  docker-compose up -d
# Visual Studio
  Archivo copia el archivo .env.example para generar el archivo .env y cambia lo siguiente:
    APP_URL=http://localhost:8080
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=laravel
    DB_PASSWORD=secret
    REDIS_CLIENT=phpredis
    REDIS_HOST=redis
    REDIS_PORT=6379
# Terminal
  docker exec -it laravel_app bash
  composer install
  php artisan key:generate
  php artisan migrate

ve a http://localhost:8080/
