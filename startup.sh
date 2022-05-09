#/home/site/wwwroot/public
cp /home/site/default /etc/nginx/sites-avialable/default
service nginx reload

cd home/site/wwwroot && cp -n .env.example .env
php artisan key:generate
