

## Introduction
  - If you need quick way present site in development to your client without worry theat anybody else will see it.
  - If you need to hide "stage" site from end consumers, and redirect them to yout real site 

  here is solution ...

## Documentation
To get started, use Composer to add the package to your project's dependencies:

```bash
    composer require lkovace18/laravel-presentation-mode
```

### Configuration

After installing the Laravel presentation mode, register the `lKovace18\PresentationMode\PresentationModeServiceProvider` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    lKovace18\PresentationMode\PresentationModeServiceProvider::class,

],
```

add setup your `.env` file:
```
PRESENTATION_MODE=true
PRESENTATION_KEY=<yourkey>
```






### Advanced configuration
Publish configuration

```bash
php artisan vendor:publish --provider="lKovace18\PresentationMode\PresentationModeServiceProvider" --tag="config"
```

Edit configuration file `config/presentation-mode.php` to suit your needs.


---


If you want to modify under_development view you can publish it:

```bash
php artisan vendor:publish --provider="lKovace18\PresentationMode\PresentationModeServiceProvider" --tag="views"
```

Or you can make your own route and view and add it in config `config/presentation-mode.php`:
```php
     /**
     * url of under development page
     */
    'under_development_url' => <your_in_development_url>,
```

---

If you want to modify translations for view publish:

```bash
php artisan vendor:publish --provider="lKovace18\PresentationMode\PresentationModeServiceProvider" --tag="translations"
```
 
---
 If you want to make custom middleware you can add the `PresentationMode` facade to the `aliases` array in your `app` configuration file:

```php

'PresentationMode' => lKovace18\PresentationMode\Facades\PresentationMode::class,

```


### TODO

    - finish and refactor tests
    - make command for setting presentation mode on
    - finish documentation

## License

Laravel Presentation Mode is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)