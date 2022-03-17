all: create_dirs add_host build up

create_dirs:
	mkdir -p /home//data/DB
	mkdir -p /home//data/wordPress

add_host:
	echo "127.0.1.1       hgrissen.42.fr" >> /etc/hosts

stop:
	docker-compose -f srcs/docker-compose.yml stop 

restart:
	docker-compose -f srcs/docker-compose.yml restart

build:
	docker-compose -f srcs/docker-compose.yml build 
up:
	docker-compose -f srcs/docker-compose.yml up -d
clean:
	docker-compose -f srcs/docker-compose.yml  down -v
	docker system prune -a -f
	docker network prune -f
	docker volume prune -f
	docker image prune -f
fclean: clean
	rm -Rf 