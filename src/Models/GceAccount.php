<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class GceAccount extends BitmovinResource
{
    /** @var string */
    public $serviceAccountCredentials;

    /** @var string */
    public $serviceAccountEmail;

    /** @var string */
    public $privateKey;

    /** @var string */
    public $projectId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * GCP service account credentials JSON
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
     * Email address of the Google service account that will be used to spin up VMs
     *
     * @param string $serviceAccountEmail
     * @return $this
     */
    public function serviceAccountEmail(string $serviceAccountEmail)
    {
        $this->serviceAccountEmail = $serviceAccountEmail;

        return $this;
    }

    /**
     * Google private key of the Google service account that will be used to spin up VMs
     *
     * @param string $privateKey
     * @return $this
     */
    public function privateKey(string $privateKey)
    {
        $this->privateKey = $privateKey;

        return $this;
    }

    /**
     * ID of the GCP project in which the VMs are supposed to run.
     *
     * @param string $projectId
     * @return $this
     */
    public function projectId(string $projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }
}

