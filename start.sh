echo "---Starting services using docker-compose---"
# docker-compose up -d 
docker-compose up -d --build --remove-orphans --force-recreate

echo "---Installing dependencies---"
docker-compose exec app composer update --no-interaction --working-dir=/var/www
docker-compose exec app composer install --ignore-platform-reqs --no-interaction --working-dir=/var/www
