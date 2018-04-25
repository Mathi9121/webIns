#!/bin/bash
bin/console cache:clear --env=prod
chown -R www-data:www-data  var/cache/ var/logs/
bin/console assets:install --env=prod
bin/console assetic:dump --env=prod
