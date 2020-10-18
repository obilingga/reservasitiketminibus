# Boilerplate Project Laravel dengan Docker

[Kenapa Docker ?](https://www.docker.com/why-docker)


## Linux Ubuntu 20.04
``` 
sudo apt update
sudo apt install docker.io docker-compose -y
```

## Windows
[Install Dokcer Desktop](https://www.docker.com/products/docker-desktop)


### Menjalankan Docker
```
git clone https://github.com/gymie/docker-compose-laravel.git laravel
cd laravel
docke-compose run --rm composer create-project --prefer-dist laravel/laravel .
cp src/.env.example src/.env
docker-compose up -d site
docker-compose run --rm composer install
docker-compose run --rm artisan key:generate
```
