USER = $(shell whoami)
CURRENT = $(shell pwd)
TARGET = /var/www/html

echo:
	@echo 'hoge'

composer:
	@composer update

install:
	@sudo rm -rf /var/www/html_back/*
	@sudo mv /var/www/html/* /var/www/html_back
	@sudo cp -r ./html/* /var/www/html/
	@sudo cp -r ./src /var/www/html/
	@sudo cp -r ./vendor /var/www/html/

dev_install:
	@sudo mkdir -p /var/www/html/$(USER)
	@sudo rm -rf /var/www/html/$(USER)/*
	@sudo cp -r ./html/* /var/www/html/$(USER)/
	@sudo cp -r ./src /var/www/html/$(USER)/
	@sudo cp -r ./vendor /var/www/html/$(USER)/

link_install:
	@sudo ln -snf $(CURRENT)/src $(TARGET)/$(USER)
