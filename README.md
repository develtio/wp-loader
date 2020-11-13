<p align="center">
    <a href="https://symfony.com" target="_blank">
        <img height="80" src="https://raw.githubusercontent.com/develtio/assets/master/logo/logo.svg">
    </a>
</p>

# Develtio - Loader
**Loader** by [develtio.com](https://develtio.com)

Installation
------------
```
composer require develtio/wp-loader
```

Examples
------------
```php
use Develtio\WP\Loader\TypesLoader;

(new TypesLoader(__DIR__ . '/post-types/*.php'))->run();
```

Group

```php
use Develtio\WP\Loader\GroupLoader;
use Develtio\WP\Loader\TypesLoader;

$gl = new GroupLoader();
$gl->add(new TypesLoader(__DIR__ . '/post-types/*.php'));
$gl->add(new TypesLoader(__DIR__ . '/taxonomies/*.php'));
$gl->run();
```