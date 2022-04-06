<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Output extends BitmovinResource
{
    /** @var \BitmovinApiSdk\Models\AclEntry[] */
    public $acl;

    public static $discriminatorName = "type";
    public static $discriminatorMapping = [
        "AKAMAI_NETSTORAGE" => AkamaiNetStorageOutput::class,
        "AZURE" => AzureOutput::class,
        "CDN" => CdnOutput::class,
        "GENERIC_S3" => GenericS3Output::class,
        "GCS" => GcsOutput::class,
        "FTP" => FtpOutput::class,
        "LOCAL" => LocalOutput::class,
        "S3" => S3Output::class,
        "S3_ROLE_BASED" => S3RoleBasedOutput::class,
        "SFTP" => SftpOutput::class,
        "AKAMAI_MSL" => AkamaiMslOutput::class,
        "LIVE_MEDIA_INGEST" => LiveMediaIngestOutput::class,
        "GCS_SERVICE_ACCOUNT" => GcsServiceAccountOutput::class,
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

