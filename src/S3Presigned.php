<?php

namespace Svikramjeet\S3Presigned;

use Aws\S3\S3Client;
use Illuminate\Http\Request;

class S3Presigned
{
    private $client;

    public function __construct()
    {
        $this->client = new S3Client([
            'version' => 'latest',
            'region' => config('s3-presigned.aws_region'),
            'credentials' => [
                'key' => config('s3-presigned.aws_access_key'),
                'secret' => config('s3-presigned.aws_secret_key'),
            ],
        ]);
    }

    public function getSignedPutRequest(Request $request): array
    {
        return $this->getSignedRequest($request->file ?? 'put.png', 'PutObject');
    }

    public function getSignedGetRequest(Request $request): array
    {
        return $this->getSignedRequest($request->file ?? 'get.png', 'GetObject');
    }

    private function getSignedRequest(string $file, string $type): array
    {
        $s3_bucket = config('s3-presigned.aws_bucket_name');
        $expiry_time = config('s3-presigned.expiry_time');
        $s3_options = [];

        $command = $this->client->getCommand($type, [
            'Bucket' => $s3_bucket,
            'Key' => $file,
            'MetaData' => $s3_options,
        ]);

        $s3_request = $this->client->createPresignedRequest($command, "+$expiry_time minutes");

        return[
            'file_name' => $file,
            'presigned_url' => (string) $s3_request->getUri(),
        ];
    }
}
