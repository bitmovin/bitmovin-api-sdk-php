<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class S3Output extends Output
{
    /** @var string */
    public $bucketName;

    /** @var string */
    public $accessKey;

    /** @var string */
    public $secretKey;

    /** @var string */
    public $md5MetaTag;

    /** @var AwsCloudRegion */
    public $cloudRegion;

    /** @var S3SignatureVersion */
    public $signatureVersion;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->cloudRegion = ObjectMapper::map($this->cloudRegion, AwsCloudRegion::class);
        $this->signatureVersion = ObjectMapper::map($this->signatureVersion, S3SignatureVersion::class);
    }

    /**
     * Amazon S3 bucket name (required)
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
     * Amazon S3 access key (required)
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
     * Amazon S3 secret key (required)
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
     * If set a user defined tag (x-amz-meta-) with that key will be used to store the MD5 hash of the file.
     *
     * @param string $md5MetaTag
     * @return $this
     */
    public function md5MetaTag(string $md5MetaTag)
    {
        $this->md5MetaTag = $md5MetaTag;

        return $this;
    }

    /**
     * The cloud region in which the bucket is located. Is used to determine the ideal location for your encodings automatically.
     *
     * @param AwsCloudRegion $cloudRegion
     * @return $this
     */
    public function cloudRegion(AwsCloudRegion $cloudRegion)
    {
        $this->cloudRegion = $cloudRegion;

        return $this;
    }

    /**
     * Specifies the method used for authentication. Must be set to S3_V2 if the region supports both V2 and V4, but the bucket allows V2 only (see https://docs.aws.amazon.com/general/latest/gr/rande.html#s3_region)
     *
     * @param S3SignatureVersion $signatureVersion
     * @return $this
     */
    public function signatureVersion(S3SignatureVersion $signatureVersion)
    {
        $this->signatureVersion = $signatureVersion;

        return $this;
    }
}

