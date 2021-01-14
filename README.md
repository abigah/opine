# A comments plugin for Laravel powered by Livewire

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abigah/opine.svg?style=flat-square)](https://packagist.org/packages/abigah/opine)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/abigah/opine/run-tests?label=tests)](https://github.com/abigah/opine/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/abigah/opine.svg?style=flat-square)](https://packagist.org/packages/abigah/opine)


The first steps to a Laravel plugin to allow comments on any model that you want.


Thanks to Spatie for the training and BeyondCode.

## Installation

You can install the package via composer:

```bash
composer require abigah/opine
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Abigah\Opine\OpineServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Abigah\Opine\OpineServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
//return [
// Coming Soon
//];
```

## Usage

```php
$opine = new Abigah\Opine();
echo $opine->echoPhrase('Hello, Abigah!');
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

- [Sheldon Kotyk](https://github.com/sheldonkotyk)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
