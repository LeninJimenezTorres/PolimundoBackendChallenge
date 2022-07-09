# POLIMUNDO BACKEND CHALLENGE

![](Galery/polimundo.jpg)

This is a backend challenge by Polimundo company, the rulers are:

- Use latest version laravel framework
- Create migrations, seeders and models to 2 tables each one with 3 columns (without counting on id and timestamps)
- Create 2 endpoints to each table, the first endpoint will show all table data and the second a specific record by id with the format: /api/table/id
- Extra points if the whole enviroment is deployed using docker

## DESCRIPTION
The project is developed in a docker-compose enviroment with the following images:
- Nginx : alpine
- Mysql : 8.0
- Php : 8.1.4-fpm-alpine
- PhpMyAdmin : phpmyadmin

To deploy the project, first you need to have docker installed and running in your device, then run the command: 
```markdown
    docker-compose up -d
```
Verify the images created, you can use cli command or the desktop app. You will have 4 images named:
- mysql
- nginx
- phpmyadmin/phpmyadmin
- testbackendpolimundo_php
![](Galery/images.png)

And a container named 'testbackendpolimundo' with 4 subcontainers named:
- mysql
- nginx  
- php
- phpmyadmin
![](Galery/container.png)
