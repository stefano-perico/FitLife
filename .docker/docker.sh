composer install --optimize-autoloader --no-interaction
npm install --force
npm run build
php bin/console doctrine:migrations:migrate --no-interaction
exec apache2-foreground