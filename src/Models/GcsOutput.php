<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class GcsOutput extends Output
{
    /** @var string */
    public $accessKey;

    /** @var string */
    public $secretKey;

    /** @var string */
    public $bucketName;

    /** @var \BitmovinApiSdk\Models\GoogleCloudRegion */
    public $cloudRegion;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->cloudRegion = ObjectMapper::map($this->cloudRegion, GoogleCloudRegion::class);
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
     * cloudRegion
     *
     * @param \BitmovinApiSdk\Models\GoogleCloudRegion $cloudRegion
     * @return $this
     */
    public function cloudRegion(\BitmovinApiSdk\Models\GoogleCloudRegion $cloudRegion)
    {
        $this->cloudRegion = $cloudRegion;

        return $this;
    }
}

