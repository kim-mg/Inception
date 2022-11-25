NAME = inception

YAML = docker-compose.yaml

DIR_SRCS = srcs


all : $(NAME)

$(NAME) :
	sleep 3
	sudo mkdir -p $(HOME)/data/mariadb $(HOME)/data/wordpress
ifeq (,$(wildcard .setup))
	sudo chmod 777 /etc/hosts
	sudo echo "127.0.0.1 myunkim.42.fr" >> /etc/hosts
	touch .setup
endif
	sudo docker-compose -f $(DIR_SRCS)/$(YAML) up --build -d

clean :
	sudo docker-compose -f $(DIR_SRCS)/$(YAML) down -v --rmi all

fclean : clean
	sudo rm -rf $(HOME)/db
	sudo rm -rf .setup
	sudo docker network prune -f
	sudo docker volume prune -f
	sudo docker image prune -a -f
	sudo sed '/myunkim.42.fr/d' /etc/hosts > ./hosts
	sudo cat ./hosts > /etc/hosts
	sudo rm -rf ./hosts

re : fclean all

.PHONY : all clean fclean re