<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Input extends BitmovinResource
{
    public static $discriminatorName = "type";
    public static $discriminatorMapping = [
        "AKAMAI_NETSTORAGE" => AkamaiNetStorageInput::class,
        "ASPERA" => AsperaInput::class,
        "AZURE" => AzureInput::class,
        "REDUNDANT_RTMP" => RedundantRtmpInput::class,
        "FTP" => FtpInput::class,
        "GENERIC_S3" => GenericS3Input::class,
        "GCS" => GcsInput::class,
        "HTTP" => HttpInput::class,
        "HTTPS" => HttpsInput::class,
        "HLS" => HlsInput::class,
        "LOCAL" => LocalInput::class,
        "RTMP" => RtmpInput::class,
        "S3" => S3Input::class,
        "S3_ROLE_BASED" => S3RoleBasedInput::class,
        "SFTP" => SftpInput::class,
        "ZIXI" => ZixiInput::class,
        "SRT" => SrtInput::class,
        "GCS_SERVICE_ACCOUNT" => GcsServiceAccountInput::class,
        "DIRECT_FILE_UPLOAD" => DirectFileUploadInput::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

