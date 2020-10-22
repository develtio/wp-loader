# Develtio - Loader
**Loader** by [develtio.com](https://develtio.com)

Examples
------------
```php
use Develtio\WP\Loader\TypesLoader;

(new TypesLoader(__DIR__ . '/post-types/*.php'))->run();
```

Group

```php
use Develtio\WP\Loader\GroupLoader;
use Develtio\WP\Loader\SampleLoader;

$gl = new GroupLoader();
$gl->add(new TypesLoader(__DIR__ . '/post-types/*.php'));
$gl->add(new TypesLoader(__DIR__ . '/taxonomies/*.php'));
$gl->run();
```