## Urban Terrorists Bangladesh Website


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
    

And add this to your hosts file: 

    127.0.0.1   urtbd.dev
    
###### STEP - 3: Permissions

The web server must have write access to everything under `app/storage`. 


###### That's all, Now you should have a working installation :) 



