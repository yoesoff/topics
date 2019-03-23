



cd docker
docker-compose up

docker exec -it docker_topics_php_fpm_1 ./artisan migrate

sudo chown -R $USER:www-data bootstrap/cache
sudo chown -R $USER:www-data storage
