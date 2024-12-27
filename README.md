## N+1 Query Problem Example
Repositori sample untuk masalah N+1 Query

## How to use
- Clone repositori ini menggunakan `git clone https://github.com/qadrLabs/n-1-query-problem-example.git`
- Copy `.env.example` menjadi `.env`.
- Run command `composer install`
- Run command `php artisan key:generate`
- Run command `php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"`
- Run command `php artisan migrate`
- Run command `php artisan db:seed`
- Run command `php artisan serve`, akses `http://127.0.0.1:8000/posts`.
- Cek tab `Queries` pada debugbar untuk melihat query yang dieksekusi
