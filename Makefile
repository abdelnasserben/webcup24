deploy:
	ssh hodi_test 'cd site/webcup24 && git pull origin main && make install'


install: vendor/autoload.php .env public/storage public/build/manifest.json
	ea-php82 artisan cache:clear
	ea-php82 artisan migrate:fresh --seed

.env:
	cp .env.example .env
	ea-php82 artisan key:generate


public/storage:
	ea-php82 artisan storage:link


vendor/autoload.php: composer.lock
	ea-php82 /opt/cpanel/composer/bin/composer install
	touch vendor/autoload.php


public/build/manifest.json: package.json
	export PATH="/opt/alt/alt-nodejs20/root/usr/bin/:$PATH"
	npm install
	npm run build