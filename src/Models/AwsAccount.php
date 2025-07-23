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

    /** @var string */
    public $roleName;

    /** @var string */
    public $externalId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Deprecated: Amazon access key for legacy support. Use &#x60;roleName&#x60; instead
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
     * Deprecated: Amazon secret key for legacy support. Use &#x60;roleName&#x60; instead
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

    /**
     * Role name including path for the AWS IAM role that will be used by Bitmovin to access the AWS account depicted by &#x60;accountNumber&#x60;. The role ARN is constructed based on &#x60;accountNumber&#x60; and &#x60;roleName&#x60;: &#x60;arn:aws:iam::{accountNumber}:role/{roleName}&#x60;.  For details on how to create the AWS IAM role in your account, please refer to the [AWS cloud connect setup guide](https://developer.bitmovin.com/encoding/docs/using-bitmovin-cloud-connect-with-aws).
     *
     * @param string $roleName
     * @return $this
     */
    public function roleName(string $roleName)
    {
        $this->roleName = $roleName;

        return $this;
    }
}

