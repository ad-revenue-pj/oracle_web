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
