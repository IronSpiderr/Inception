NAME = inception


# COLOR FLAGS
CLR_BLACK   = \033[0;30m
CLR_RED		= \033[0;31m
CLR_GREEN	= \033[0;32m
CLR_LBLUE   = \033[0;94m
CLR_YELLOW  = \033[0;33m
CLR_MAGENTA = \033[0;35m
CLR_RESET	= \033[0m

all:
	@echo "$(CLR_GREEN)Lauch of ${NAME} configuration ...\n$(CLR_RESET)"
	@sh srcs/requirements/wordpress/tools/make_files.sh
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env up -d

build:
	@echo "$(CLR_LBLUE)Build of ${NAME} configuration ...\n$(CLR_RESET)"
	@sh srcs/requirements/wordpress/tools/make_files.sh
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env up -d --build

down:
	@echo "$(CLR_YELLOW)Shutting down the ${NAME} configuration ...\n$(CLR_RESET)"
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env down

re:
	@echo "$(CLR_BLACK)Remaking the ${NAME} configuration ...\n$(CLR_RESET)"
	@docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env up -d --build

clean: down
	@echo "$(CLR_RED)Cleaning the ${NAME} configuration ...\n$(CLR_RESET)"
	@docker system prune -a
	@sudo rm -rf ~/data/wordpress/*
	@sudo rm -rf ~/data/mariadb/*

fclean:
	@echo "$(CLR_MAGENTA)Cleaning all the docker configuration ...\n$(CLR_RESET)"
	@docker stop $$(docker ps -qa)
	@docker system prune --all --force --volumes
	@docker network prune --force
	@docker volume prune --force
	@sudo rm -rf ~/data/wordpress/*
	@sudo rm -rf ~/data/mariadb/*

.PHONY	: all build down re clean fclean