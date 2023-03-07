<?php

namespace Svikramjeet\S3Presigned;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Svikramjeet\S3Presigned\Commands\S3PresignedCommand;

class S3PresignedServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         */
        $package
            ->name('s3-presigned')
            ->hasConfigFile();
    }
}
