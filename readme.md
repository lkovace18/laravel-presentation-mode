

## Introduction
 ... 

## License

Laravel Presentation is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Official Documentation


To get started with Socialite, use Composer to add the package to your project's dependencies:

    composer require lkovace18/laravel-presentation-mode

### Configuration

After installing the Laravel presentation library, register the `lKovace18\PresentationMode\PresentationModeServiceProvider` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    lKovace18\PresentationMode\PresentationModeServiceProvider::class,
],
```

Also, you can add the `PresentationMode` facade to the `aliases` array in your `app` configuration file:

```php
'PresentationMode' => lKovace18\PresentationMode\Facades\PresentationMode::class,
```


### Basic Usage

### TODO