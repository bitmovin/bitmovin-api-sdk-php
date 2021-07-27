<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class GcsServiceAccountOutput extends Output
{
    /** @var string */
    public $serviceAccountCredentials;

    /** @var string */
    public $bucketName;

    /** @var GoogleCloudRegion */
    public $cloudRegion;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->cloudRegion = ObjectMapper::map($this->cloudRegion, GoogleCloudRegion::class);
    }

    /**
     * GCS projectId (required)
     *
     * @param string $serviceAccountCredentials
     * @return $this
     */
    public function serviceAccountCredentials(string $serviceAccountCredentials)
    {
        $this->serviceAccountCredentials = $serviceAccountCredentials;

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
}

