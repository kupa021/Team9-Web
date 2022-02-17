CONTAINER ID   IMAGE                   COMMAND                  CREATED       STATUS      PORTS                   
            NAMES
be8e43a91fcf   wordpress:latest        "docker-entrypoint.sâ€¦"   12 days ago   Up 2 days   0.0.0.0:83->80/tcp    
              francisweb-wordpress-1
da0ad01d46a2   phpmyadmin/phpmyadmin   "/docker-entrypoint.â€¦"   12 days ago   Up 2 days   0.0.0.0:82->80/tcp    
              francisweb-phpmyadmin-1
a4f10822a292   mysql:latest            "docker-entrypoint.sâ€¦"   12 days ago   Up 2 days   33060/tcp, 0.0.0.0:603
4->3306/tcp   francisweb-db-1
3d8ea3743692   francisweb_php          "docker-php-entrypoiâ€¦"   2 weeks ago   Up 2 days   0.0.0.0:81->80/tcp    
              francisweb-php-1