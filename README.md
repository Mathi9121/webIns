# Fork de roundge/ocim.formations #

Webinscription
==============

1) Versions et dépendances
--------------------------

Version actuelle de Symfony : Symfony 3.4 
Librairies :
  * Wkhtmltopdf 0.12.4
  * Composer 1.6.5
  * PHP 7.2
  * jQuery 3.3.1

2) Configuration Nginx
----------------------

Créer un fichier .conf dans sites-available.

server {
     listen       80  default_server;
     server_name  _;
     root /srv/http;
     index index.html;
     client_max_body_size 50M;

     charset utf-8;
     access_log  /var/log/nginx/access.log  main;
     error_log  /var/log/nginx/error.log  info;

     autoindex on;

     location / {
         try_files $uri $uri/ =404;
         error_page 405 = $uri;
     }

     location ~ \.php$ {
         #fastcgi_pass phpwebinscriptions;
         fastcgi_pass php72;
         fastcgi_split_path_info ^(.+\.php)(/.*)$;
         include fastcgi_params;
         fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
         fastcgi_param HTTPS off;
         fastcgi_read_timeout 300;
     }
}

server {
     server_name webinscriptions.ocim.localhost;
     root /srv/http/ocim.formations/web;
     index app_dev.php app.php index.html;

     location / {
         try_files $uri /app_dev.php$is_args$args;
     }
     location ~ ^/(app|app_dev|config)\.php(/|$) {
         #fastcgi_pass phpwebinscriptions;
         fastcgi_pass php72;
         fastcgi_index index.php;
         include fastcgi_params;
         fastcgi_param  SCRIPT_FILENAME $document_root$fastcgi_script_name;
     }

     error_log /var/log/nginx/webinscriptions.error.log;
     access_log /var/log/nginx/webinscriptions.access.log;
}

3) Installation des librairies 
------------------------------

Commande pour installer les librairies nécessaires à Symfony, dans le dossier vendor.

    composer install

5) Création de la base de données
---------------------------------

    bin/console doctrine:schema:create 

4) Mettre à jour la base de données
-----------------------------------

    bin/console doctrine:schema:update --force

5) Supprimer le cache
---------------------

    bin/console cache:clear
    chown -R www-data:www-data  var/cache/ var/logs/ 

License
-------

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.
