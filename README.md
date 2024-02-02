# CAPTCHA Plugin for Filament

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dominion-solutions/filament-captcha.svg?style=flat-square)](https://packagist.org/packages/dominion-solutions/filament-captcha)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/dominion-solutions/filament-captcha/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/dominion-solutions/filament-captcha/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/dominion-solutions/filament-captcha/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/dominion-solutions/filament-captcha/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/dominion-solutions/filament-captcha.svg?style=flat-square)](https://packagist.org/packages/dominion-solutions/filament-captcha)


CAPTCHA Support in Filament!

[Skip to Installation](#installation)

### What Is CAPTCHA?
CAPTCHA stands for Completely Automated Public Turing test to tell Computers and Humans Apart.  The goal of this package is to keep bots from being able to submit fake data on your forms.  This should be the last (and not first) line of defense to keep bots from submitting garbage data to your unprotected forms.

### Why do I need it?
If you're using a public panel within your application to collect data, for example a comment box, or a lead funnel, it can be (at best) annoying or (worst) a security liability for bots to try to be able to submit data to a form.


## Installation

You can install the package via composer:
```bash
composer require dominion-solutions/filament-captcha
```
You will also need a Captcha Provider.  Filament Captcha supports the following providers:
| Provider | Composer Package | Install Instructions |
| -------- | ---------------- | -------------------- |
| {m’e} Web Studio Captcha | `composer require mews/captcha` | [https://github.com/mewebstudio/captcha?tab=readme-ov-file#installation](https://github.com/mewebstudio/captcha?tab=readme-ov-file#installation) |


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
    'engine' => env('CAPTCHA_ENGINE', 'mews'),
];
```

## Usage
Usage with `mews/captcha`
```php
public function form(Form $form): Form
{
    return $form->schema([
        Captcha::make('captcha')
            ->rules(['captcha'])
            ->required()
            ->validationMessages([
                'captcha'  =>  __('Captcha does not match the image'),
            ]),
        ]);
    }
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
