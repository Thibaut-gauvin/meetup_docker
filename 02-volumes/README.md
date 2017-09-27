## NOTICE


### notes : 

$PWD return the absolute path to your current directory, test in your terminal:

    echo $PWD (Print Working Directory)
    /home/thibaut/meetup_docker_101/02-volumes


### Use Nginx official image & mount custom config inside :

    docker run -d \
        --name web \
        -p 8080:80 \
        -v $PWD:/home/docker \
        -v $PWD/nginx.conf:/etc/nginx/conf.d/default.conf \
        nginx

### Connect to the running container and view files :
    
    # Connect to the container
    docker exec -ti web /bin/bash
    
    # View the files
    root@51aafa93a21e:/# cd /home/docker/
    root@51aafa93a21e:/home/docker# ls -alh
    drwxrwxr-x 2 1000 1000 4.0K Sep 25 20:25 .
    drwxr-xr-x 3 root root 4.0K Sep 25 20:16 ..
    -rw-rw-r-- 1 1000 1000  113 Sep 22 19:31 toto.html
