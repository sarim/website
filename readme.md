## Urban Terrorists Bangladesh Website

[![Build Status](https://travis-ci.org/urtbd/website.png?branch=master)](https://travis-ci.org/urtbd/website)

#### Installation

###### STEP - 1: Install Dependenices

The website uses the Laravel framework version 4. Laravel uses Composer to manage dependencies. So, if you don't have composer installed already, let's grab composer first: 

    $ curl -sS https://getcomposer.org/installer | php 
    
Now you're ready to install the dependencies: 

    $ php composer.phar install 
    

That should install everything required in the `vendor` directory. 


###### STEP - 2: Setting up a virtual host

Sample for apache: 

    <VirtualHost *:80>
        ServerName urtbd.dev
        DocumentRoot "/Users/masnun/Sites/urtbd/public"
        
        <Directory "/Users/masnun/Sites/urtbd/public">
            Order allow,deny
            Allow from all
            AllowOverride all
        </Directory>
        
    </VirtualHost>
    

Sample for nginx:

    server {
        server_name urtbd.dev;
        root /Users/sarim/Sites/website/public;

        location / {
            index index.php index.html index.htm;
            try_files $uri $uri/ /index.php;
        }

        location ~ \.php$ {
            fastcgi_pass   unix:/var/run/fpm.sock;
            fastcgi_index  index.php;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include        fastcgi_params;
        }
    }

And add this to your hosts file: 

    127.0.0.1   urtbd.dev
    
###### STEP - 3: Permissions

The web server must have write access to everything under `app/storage`. 

    sudo chmod -R 0777 storage


###### That's all, Now you should have a working installation :) 



