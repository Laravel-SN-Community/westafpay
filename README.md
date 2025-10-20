# This is my package westafpay

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laravelsn/westafpay.svg?style=flat-square)](https://packagist.org/packages/laravelsn/westafpay)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/laravelsn/westafpay/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/laravelsn/westafpay/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/laravelsn/westafpay/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/laravelsn/westafpay/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/laravelsn/westafpay.svg?style=flat-square)](https://packagist.org/packages/laravelsn/westafpay)

Westafpay enable you as developer to interact easily with payment provider in west africa. 
Actually  this package only support Wave api. 
## Installation

You can install the package via composer:

```bash
composer require laravelsn/westafpay
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="westafpay-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="westafpay-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="westafpay-views"
```

## Usage

```php
use Laravelsn\Westafpay\Facades\Westafpay;

Westafpay::getBalance();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Laravelsn](https://github.com/Laravelsn)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
