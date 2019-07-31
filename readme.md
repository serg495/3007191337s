## To deploy a project you need to run several commands.

1. git clone https://github.com/serg495/3007191337s.git
2. composer update
3. cp env.example .env
4. php artisan key:generate.

After connection to DB in .env you need to run command:
php artisan migrate --seed.

Test account:
login: test.user@gmail.com
password: pass123
