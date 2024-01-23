# CAPTCHA Plugin for Filament

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dominion-solutions/filament-captcha.svg?style=flat-square)](https://packagist.org/packages/dominion-solutions/filament-captcha)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/dominion-solutions/filament-captcha/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/dominion-solutions/filament-captcha/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/dominion-solutions/filament-captcha/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/dominion-solutions/filament-captcha/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/dominion-solutions/filament-captcha.svg?style=flat-square)](https://packagist.org/packages/dominion-solutions/filament-captcha)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require dominion-solutions/filament-captcha
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-captcha-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-captcha-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-captcha-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentCaptcha = new DominionSolutions\FilamentCaptcha();
echo $filamentCaptcha->echoPhrase('Hello, DominionSolutions!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mark J. Horninger](https://github.com/dominion-solutions)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
