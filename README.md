# PHP wrapper of S3 api for pre-signed url

[![Latest Version on Packagist](https://img.shields.io/packagist/v/svikramjeet/s3-presigned.svg?style=flat-square)](https://packagist.org/packages/svikramjeet/s3-presigned)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/svikramjeet/s3-presigned/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/svikramjeet/s3-presigned/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/svikramjeet/s3-presigned.svg?style=flat-square)](https://packagist.org/packages/svikramjeet/s3-presigned)

Create presigned url for S3 object for uploading via PUT


## Installation

You can install the package via composer:

```bash
composer require svikramjeet/s3-presigned
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="s3-presigned-config"
```


## Usage

```php
$s3Presigned = new Svikramjeet\S3Presigned\S3Presigned();
echo $s3Presigned->getSignedPutRequest($request)['presigned_url'];
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Vikramjeet Singh](https://github.com/svikramjeet)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
