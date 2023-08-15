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
	@docker-compose -f ./srcs/docker-compose.yml up -d

build:
	@echo "$(CLR_LBLUE)Build of ${NAME} configuration ...\n$(CLR_RESET)"
	@docker-compose -f ./srcs/docker-compose.yml up -d --build

down:
	@echo "$(CLR_YELLOW)Shutting down the ${NAME} configuration ...\n$(CLR_RESET)"
	@docker-compose -f ./srcs/docker-compose.yml down

re:
	@echo "$(CLR_BLACK)Remaking the ${NAME} configuration ...\n$(CLR_RESET)"
	@docker-compose -f ./srcs/docker-compose.yml up -d --build

clean: down
	@echo "$(CLR_RED)Cleaning the ${NAME} configuration ...\n$(CLR_RESET)"
	@docker system prune -a

fclean:
	@echo "$(CLR_MAGENTA)Cleaning all the docker configuration ...\n$(CLR_RESET)"
	@docker stop $$(docker ps -qa) 2>/dev/null
	@docker rm $$(docker ps -qa) 2>/dev/null
	@docker rmi -f $$(docker images -qa) 2>/dev/null
	@docker volume rm $$(docker volume ls -q) 2>/dev/null
	@docker network rm $$(docker network ls -q) 2>/dev/null
	@docker system prune -a --volume 2>/dev/null
	@docker system prune -a --force 2>/dev/null