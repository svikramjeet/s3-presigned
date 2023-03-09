# PHP wrapper of S3 api for pre-signed url

[![Latest Version on Packagist](https://img.shields.io/packagist/v/svikramjeet/s3-presigned.svg?style=flat-square)](https://packagist.org/packages/svikramjeet/s3-presigned)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/svikramjeet/s3-presigned/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/svikramjeet/s3-presigned/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/svikramjeet/s3-presigned/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/svikramjeet/s3-presigned/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/svikramjeet/s3-presigned.svg?style=flat-square)](https://packagist.org/packages/svikramjeet/s3-presigned)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/s3-presigned.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/s3-presigned)


## Installation

You can install the package via composer:

```bash
composer require svikramjeet/s3-presigned
```

You can publish with:

```bash
php artisan vendor:publish 
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="s3-presigned-config"
```


## Usage

```php
$s3Presigned = new Svikramjeet\S3Presigned();
echo $s3Presigned->getSignedPutRequest($request);
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Vikramjeet Singh](https://github.com/svikramjeet)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
