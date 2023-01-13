Eppendorf Challenge API
===========

**This is only a dev setup and should not be running in a live environment, no deployment/cicd has been setup!**

*This is a Symfony and Platform Api Setup providing both a REST and GraphQL API, including:*
- Swagger
- GraphQL Playground
- GraphiQl Editor    

*A Docker Setup for the PostgresSql Database is provided.*

## Requirements

- PHP >=8.1
- Docker
- Docker Compose
- Composer
- symfony-cli

## Initial installation
- Install dependencies:    
`composer install`
- Startup symfony dev server:    
`symfony serve -d`
- Build docker image:    
`docker-compose build --pull --no-cache`
- Start docker container:    
`docker-compose up -d`
- Create database:    
`symfony console doctrine:database:create`
- Run migrations (fills the database with example data):    
`symfony console doctrine:migrations:migrate`

## Startup
- `docker-compose up -d`
- `symfony serve -d`
- `docker-compose logs`

## Endpoints
- GraphQl GraphiQl Editor: http://127.0.0.1:8000/api/graphql
- GraphQl Playground: http://127.0.0.1:8000/api/graphql/graphql_playground
- Rest Api Swagger: http://127.0.0.1:8000/api/
