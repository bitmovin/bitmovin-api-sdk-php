<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsOutput extends BitmovinResource
{
    /** @var \BitmovinApiSdk\Models\AclEntry[] */
    public $acl;

    public static $discriminatorName = "type";
    public static $discriminatorMapping = [
        "S3_ROLE_BASED" => AnalyticsS3RoleBasedOutput::class,
        "GCS_SERVICE_ACCOUNT" => AnalyticsGcsServiceAccountOutput::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->acl = ObjectMapper::map($this->acl, AclEntry::class);
    }

    /**
     * acl
     *
     * @param \BitmovinApiSdk\Models\AclEntry[] $acl
     * @return $this
     */
    public function acl(array $acl)
    {
        $this->acl = $acl;

        return $this;
    }
}

