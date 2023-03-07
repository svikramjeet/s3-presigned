<?php

namespace Svikramjeet\S3Presigned\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Svikramjeet\S3Presigned\S3Presigned
 */
class S3Presigned extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Svikramjeet\S3Presigned\S3Presigned::class;
    }
}
