

## About the project

This is a simple encyclopedia based on the [Rick and Morty API](https://rickandmortyapi.com/).

To run the project, simply clone into a folder of your choice, then run:
```
npm install && composer install
npm run dev
php artisan serve
```
*Note: if you get a 500 server error, you may need to run these additional 
commands before php artisan serve:*

```
cp .env.example .env
php artisan key:generate
```
