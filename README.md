# DHL Parcel API client for Laravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Tests][ico-tests]][link-tests]
[![StyleCI][ico-style-ci]][link-style-ci]
[![Total Downloads][ico-downloads]][link-downloads]

This package incorporates the [DHL Parcel API client](https://github.com/mvdnbrk/dhlparcel-php-api) into your Laravel project.

## Installation

You can install the package via composer:

```bash
composer require mvdnbrk/laravel-dhlparcel
```

## Configuration

All you need to do is add your credentials to the `.env` file:

```
DHLPARCEL_ID=YOUR-USER-ID
DHLPARCEL_SECRET=YOUR-SECRET-KEY
```

## Usage

```php
use Mvdnbrk\Laravel\Facades\DhlParcel;

$shipment = DhlParcel::shipments()->create([
   ...
]);
```

* [Full documentation for the DHL Parcel API client](https://github.com/mvdnbrk/dhlparcel-php-api)

### Global helper method

For your convenience this package provides a global `dhlparcel()` helper function.

```php
dhlparcel()->shipments()->create([
   ...
]);
```

## Testing

``` bash
composer test
```
## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mark van den Broek][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mvdnbrk/laravel-dhlparcel.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-tests]: https://img.shields.io/github/workflow/status/mvdnbrk/laravel-dhlparcel/tests/main?label=tests&style=flat-square
[ico-style-ci]: https://styleci.io/repos/220024174/shield?branch=main
[ico-downloads]: https://img.shields.io/packagist/dt/mvdnbrk/laravel-dhlparcel.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/mvdnbrk/laravel-dhlparcel
[link-tests]: https://github.com/mvdnbrk/laravel-dhlparcel/actions?query=workflow%3Atests
[link-style-ci]: https://styleci.io/repos/221086654
[link-downloads]: https://packagist.org/packages/mvdnbrk/laravel-dhlparcel
[link-author]: https://github.com/mvdnbrk
[link-contributors]: ../../contributors
