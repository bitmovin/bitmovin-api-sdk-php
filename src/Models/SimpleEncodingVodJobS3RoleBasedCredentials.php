<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobS3RoleBasedCredentials extends SimpleEncodingVodJobCredentials
{
    /** @var string */
    public $roleArn;

    /** @var bool */
    public $useExternalId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Amazon ARN of the IAM Role (Identity and Access Management Role) that will be assumed for S3 access. More details can be found [here](https://bitmovin.com/docs/encoding/api-reference/sections/inputs#/Encoding/PostEncodingInputsS3RoleBased) (required)
     *
     * @param string $roleArn
     * @return $this
     */
    public function roleArn(string $roleArn)
    {
        $this->roleArn = $roleArn;

        return $this;
    }

    /**
     * Defines if the organization ID has to be used as externalId when assuming the role. More details can be found [here](https://bitmovin.com/docs/encoding/api-reference/sections/inputs#/Encoding/PostEncodingInputsS3RoleBased)
     *
     * @param bool $useExternalId
     * @return $this
     */
    public function useExternalId(bool $useExternalId)
    {
        $this->useExternalId = $useExternalId;

        return $this;
    }
}

