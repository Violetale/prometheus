# Ядро для интернет-магазинов на базе Laravel

## Установка

Вы можете установить пакет, добавив в composer.json следующий код:

```json
{
    "require": {
        "mediabroker/core": "dev-master"
    },
    "repositories": [
        {
            "type": "vcs",
            "url":  "https://github.com/mediabroker/core.git"
        }
    ]
}
```

И затем выполнив следующую команду в терминале:

```bash
composer update
```

Вам будем предложено перейти по ссылке для получения токена доступа.
Далее следуйте инструкциям по генерации и сохранению токена. 
Сгенерированный токен нужно ввести в поле ввода в терминале.

Затем необходимо внести следующие изменения в файл config/auth.php:

```php
return [

    // ...
    
    'guards' => [
 
        // ...

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

    ],

    'providers' => [

        // ...

        'admins' => [
            'driver' => 'eloquent',
            'model' => Mediabroker\Core\Models\Admin::class,
        ],

    ],

];
```

После этого нужно добавить в класс App\Exceptions\Handler.php следующий метод:

```php
use Illuminate\Support\Arr;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{
    // ...

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        if (Arr::get($exception->guards(), 0) === 'admin') {
            return redirect()->guest(route('admin.login'));
        }

        return redirect()->guest(route('login'));
    }
}
```

И привести метод handle класса App\Http\Middleware\RedirectIfAuthenticated.php к следующему виду:

```php
class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard === 'admin' && Auth::guard($guard)->check()) {
            return redirect()->route('admin.orders.index');
        }

        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
```

Также, необходимо зарегистрировать middleware в файле App\Http\Kernel.php:

```php
class Kernel extends HttpKernel
{
    protected $middleware = [
        // ...
        \Spatie\MissingPageRedirector\RedirectsMissingPages::class,
    ];

    // ...
}
```

Для корректной работы миграций может потребоваться выключение строгого режима вашей базы данных MySQL в файле config/database.php:

```php
return [

    // ...
    
    'mysql' => [

        // ...

        'strict' => false,
    ],

];
```

Наконец, вы должны выполнить команду установки ядра (предварительно у вас уже должна быть настроена база данных):

```bash
php artisan core:install
```

## Использование

Для того, чтобы иметь доступ к админ панели, вы можете создать нового администратора в терминале:

```bash
php artisan admin:create
```

Данная команда попросит вас ввести логин и пароль

Чтобы заполнить базу данных тестовыми данными, можно выполнить следующую команду:

```bash
php artisan core:seed
```
