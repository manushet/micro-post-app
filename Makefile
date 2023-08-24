docker-up:
	docker-compose up --build -d

docker-exec-php:
	docker exec -it micro_post_app_php bash