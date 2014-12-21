echo:
	@echo 'hoge'

composer:
	@composer update

install:
	@sudo rm -r /var/www/html/*
	@sudo cp -r ./html/* /var/www/html/
