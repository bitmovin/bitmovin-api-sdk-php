<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class GcsInput extends Input
{
    /** @var string */
    public $bucketName;

    /** @var GoogleCloudRegion */
    public $cloudRegion;

    /** @var string */
    public $accessKey;

    /** @var string */
    public $secretKey;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->cloudRegion = ObjectMapper::map($this->cloudRegion, GoogleCloudRegion::class);
    }

    /**
     * Name of the bucket (required)
     *
     * @param string $bucketName
     * @return $this
     */
    public function bucketName(string $bucketName)
    {
        $this->bucketName = $bucketName;

        return $this;
    }

    /**
     * The cloud region in which the bucket is located. Is used to determine the ideal location for your encodings automatically.
     *
     * @param GoogleCloudRegion $cloudRegion
     * @return $this
     */
    public function cloudRegion(GoogleCloudRegion $cloudRegion)
    {
        $this->cloudRegion = $cloudRegion;

        return $this;
    }

    /**
     * GCS access key (required)
     *
     * @param string $accessKey
     * @return $this
     */
    public function accessKey(string $accessKey)
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * GCS secret key (required)
     *
     * @param string $secretKey
     * @return $this
     */
    public function secretKey(string $secretKey)
    {
        $this->secretKey = $secretKey;

        return $this;
    }
}

