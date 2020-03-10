<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class GenericS3Input extends Input
{
    /** @var string */
    public $bucketName;

    /** @var string */
    public $host;

    /** @var int */
    public $port;

    /** @var bool */
    public $ssl;

    /** @var S3SignatureVersion */
    public $signatureVersion;

    /** @var string */
    public $accessKey;

    /** @var string */
    public $secretKey;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->signatureVersion = ObjectMapper::map($this->signatureVersion, S3SignatureVersion::class);
    }

    /**
     * Your generic S3 bucket name (required)
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
     * The generic S3 server hostname (or IP address) (required)
     *
     * @param string $host
     * @return $this
     */
    public function host(string $host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * The port on which the generic S3 server is running on (if not provided 8000 will be used)
     *
     * @param int $port
     * @return $this
     */
    public function port(int $port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Controls whether SSL is used or not
     *
     * @param bool $ssl
     * @return $this
     */
    public function ssl(bool $ssl)
    {
        $this->ssl = $ssl;

        return $this;
    }

    /**
     * Specifies the method used for authentication
     *
     * @param S3SignatureVersion $signatureVersion
     * @return $this
     */
    public function signatureVersion(S3SignatureVersion $signatureVersion)
    {
        $this->signatureVersion = $signatureVersion;

        return $this;
    }

    /**
     * Your generic S3 access key (required)
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
     * Your generic S3 secret key (required)
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

