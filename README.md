1- run: composer install

2- creale file .env then coppy .env.example to .env and updated it with your database credentials

3- php artisan key:generate

4- php artisan optimize

5- php artisan migrate

** Trong quá trình làm bài sẽ chạy thêm 1 số câu lệnh khác:
- install laravel/ui: composer require laravel/ui
- refresh migration: php artisan migrate:refresh
- seed data: php artisan db:seed
- optimize: php artisan optimize
- view routes: php artisan route:list


