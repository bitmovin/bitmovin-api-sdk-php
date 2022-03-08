<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingLiveJobAccessKeyCredentials extends SimpleEncodingLiveJobCredentials
{
    /** @var string */
    public $accessKey;

    /** @var string */
    public $secretKey;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The identifier of the access key (required)
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
     * The secret to be used for authentication (required)
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

