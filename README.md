Proyecto de Laravel 12<br>
Docker, mysql, redis, apache, phpmyadmin<br>
Requisitos: docker, docker-compose, git<br>
Configuración:<br>
<br>
# Terminal<br>
  git clone https://github.com/Augus70/laravel-docker.git<br>
  cd laravel-docker<br>
  docker-compose build<br>
  docker-compose up -d<br>
# Visual Studio<br>
  Archivo copia el archivo .env.example para generar el archivo .env y cambia lo siguiente:<br>
    APP_URL=http://localhost:8080<br>
    DB_CONNECTION=mysql<br>
    DB_HOST=mysql<br>
    DB_PORT=3306<br>
    DB_DATABASE=laravel<br>
    DB_USERNAME=laravel<br>
    DB_PASSWORD=secret<br>
    REDIS_CLIENT=phpredis<br>
    REDIS_HOST=redis<br>
    REDIS_PORT=6379<br>
# Terminal<br>
  docker exec -it laravel_app bash<br>
  composer install<br>
  php artisan key:generate<br>
  php artisan migrate<br>
<br>
ve a http://localhost:8080/<br>
# git<br>
  Para seguir trabajando desde tu repositorio:<br>
  git remote set-url origin https://github.com/usuario/nuevo-repo.git<br>
  git push -u origin main<br>
