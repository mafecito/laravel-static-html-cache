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

Add the following snippet into your `.htaccess`
```apacheconfig
# Rewrite to html cache if it exists and the request is off a static page
# (no url query params and only get requests)
RewriteCond %{REQUEST_METHOD} GET
RewriteCond %{QUERY_STRING} !.*=.*
RewriteCond %{DOCUMENT_ROOT}/cache/html%{REQUEST_URI}/index.html -f
RewriteRule ^(.*)$ /cache/html%{REQUEST_URI}/index.html [L]
```


## Clear the files
To clear all the files manually you can use an artisan task.
```bash
php artisan static-html-cache:clear
```
