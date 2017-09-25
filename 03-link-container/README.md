## NOTICE

How to bind to container together ?  
example with nginx + php7.1-fpm

(don't forget to cd to this directory before)


### Create docker network:

    docker network create demo_meetup
    
    
### Star PHP container :

    docker run -d \
        --name php \
        -v $PWD:/home/docker \
        --network demo_meetup \
        php:7.1-fpm


### Start Nginx container :

    docker run -d \
        --name web \
        -p ${NGINX_PORT}:80 \
        -p ${NGINX_HTTPS_PORT}:443 \
        -v $PWD:/home/docker \
        -v $PWD/nginx.conf:/etc/nginx/conf.d/default.conf \
        --network ${NETWORKS} \
        nginx

### Visit [http://localhost:8080](http://localhost:8080)
