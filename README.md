Log viewer for open-developer

## Screenshot

![image](https://user-images.githubusercontent.com/86517067/167827896-7a426d57-ee14-48a3-83e2-eae434d090e0.png)


## Installation

```
composer require open-developer-ext/log-viewer
```

```
php artisan developer:import log-viewer
```

Open `http://localhost/developer/logs`.


## Configuration
If your server doesn't allow you to access log files for example by blocking requests with '.log' in the url you can enable the following bypass function.

See `config/developer.php` and add in the `extensions` section
```php
'extensions' => [
    'log-viewer' => [
        'bypass_protected_urls' => true,
        //'bypass_protected_urls_find' => ['.'],          // default ['.']
        //'bypass_protected_urls_replace' => ['[dot]'],   // default ['[dot]']
    ]
]
```
