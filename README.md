# DHL Parcel API client for Laravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![StyleCI][ico-style-ci]][link-style-ci]
[![Total Downloads][ico-downloads]][link-downloads]

This package incorporates the [DHL Parcel API client](https://github.com/mvdnbrk/dhlparcel-php-api) into your laravel project.

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

$shipment = DhlParcel::api()->shipments()->create([
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

## Security

If you discover any security related issues, please email mvdnbrk@gmail.com instead of using the issue tracker.

## Credits

- [Mark van den Broek][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mvdnbrk/laravel-dhlparcel.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mvdnbrk/laravel-dhlparcel/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/mvdnbrk/laravel-dhlparcel.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/mvdnbrk/laravel-dhlparcel.svg?style=flat-square
[ico-style-ci]: https://styleci.io/repos/220024174/shield?branch=master
[ico-downloads]: https://img.shields.io/packagist/dt/mvdnbrk/laravel-dhlparcel.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/mvdnbrk/laravel-dhlparcel
[link-travis]: https://travis-ci.org/mvdnbrk/laravel-dhlparcel
[link-scrutinizer]: https://scrutinizer-ci.com/g/mvdnbrk/laravel-dhlparcel/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/mvdnbrk/laravel-dhlparcel
[link-style-ci]: https://styleci.io/repos/221086654
[link-downloads]: https://packagist.org/packages/mvdnbrk/laravel-dhlparcel
[link-author]: https://github.com/mvdnbrk
[link-contributors]: ../../contributors
