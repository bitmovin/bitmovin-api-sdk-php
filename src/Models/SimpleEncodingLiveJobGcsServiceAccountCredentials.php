<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingLiveJobGcsServiceAccountCredentials extends SimpleEncodingLiveJobCredentials
{
    /** @var string */
    public $serviceAccountCredentials;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Service account credentials for Google (required)
     *
     * @param string $serviceAccountCredentials
     * @return $this
     */
    public function serviceAccountCredentials(string $serviceAccountCredentials)
    {
        $this->serviceAccountCredentials = $serviceAccountCredentials;

        return $this;
    }
}

