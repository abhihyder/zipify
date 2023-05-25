# Zipify Laravel Package

## Overview



## Installing

You can install the Zipify package via Composer. Run the following command in your terminal:

```bash
composer require hyder/zipify
```

## Optional

The service provider will automatically get registered. Or you may manually add the service provider in your `config/app.php` file:

```php
'providers' => [
    // ...
    Hyder\Zipify\ZipifyServiceProvider::class,
];
```

## Uses

### Basic Usage

To use the Zipify package, you need to import the Zip facade and make use of its methods in your controllers or routes.

```php
use Hyder\Zipify\Facades\Zip;

// ...

```

### License

This package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

### Credits

This package is developed and maintained by Tofayel Hyder Abhi.
