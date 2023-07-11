Fiery Octopus Server
=
Fast Server environment for starting php8 applications with `PHP8`, `nginx`, `mysql`+`phpmyadmin`

For run use `docker compose up -d`

## Containers
1. site: `localhost:8080`
2. mysql: `localhost:3306`
3. phpmyadmin: `localhost:8081`

## PHP working directory
> app

### Mac M1 notice
>Uncomment 7 and 41 lines in docker-compose.yml (platform: linux/amd64) for fix warning about arm

@copy Fiery 0ctopus Development
