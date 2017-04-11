# laravel-static-html-cache
> store/cache generated responses as a static file

## Setup

Add the service provider to the `config/app.php` provider array
```php
MScharl\LaravelStaticHtmlCache\Provider\LaravelStaticHtmlCacheProvider::class,
```
Then add the middleware to the end of your `Http/Kernel.php` middleware array.
 ```php
protected $middleware = [
    \MScharl\LaravelStaticHtmlCache\Http\Middleware\LaravelStaticHtmlCacheMiddleware::class,
];
```


## Clear the files
To clear all the files manually you can use an artisan task.
```bash
php artisan static-html-cache:clear
```
