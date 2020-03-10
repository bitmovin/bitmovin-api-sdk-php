<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AwsAccount extends BitmovinResource
{
    /** @var string */
    public $accessKey;

    /** @var string */
    public $secretKey;

    /** @var string */
    public $accountNumber;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Amazon access key (required)
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
     * Amazon secret key (required)
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
     * Amazon account number (12 digits as per AWS spec) (required)
     *
     * @param string $accountNumber
     * @return $this
     */
    public function accountNumber(string $accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }
}

