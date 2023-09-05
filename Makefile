docker-up:
	docker-compose up --build -d

docker-exec-php:
	docker exec -it micro-post-app_php_1 bash

docker-stop:
	docker stop micro-post-app_php_1
	docker stop micro-post-app_mysql_1
	docker stop micro-post-app_phpmyadmin_1

docker-remove:
	docker rm micro-post-app_php_1
	docker rm micro-post-app_mysql_1
	docker rm micro-post-app_phpmyadmin_1
