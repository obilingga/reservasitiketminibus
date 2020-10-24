# Boilerplate Project Laravel dengan Docker

[Kenapa Docker ?](https://www.docker.com/why-docker)


## Linux Ubuntu 20.04
``` 
sudo apt update
sudo apt install docker.io docker-compose -y
```

## Windows
[Install Docker Desktop](https://www.docker.com/products/docker-desktop)


### Menjalankan Docker
```
git clone https://github.com/gymie/docker-compose-laravel.git laravel
cd laravel
mkdir src
docker-compose run --rm composer create-project --prefer-dist laravel/laravel .
docker-compose up -d site
```
