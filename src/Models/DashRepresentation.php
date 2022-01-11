<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashRepresentation extends BitmovinResponse
{
    public static $discriminatorName = "typeDiscriminator";
    public static $discriminatorMapping = [
        "DRM_FMP4" => DashFmp4DrmRepresentation::class,
        "FMP4" => DashFmp4Representation::class,
        "WEBM" => DashWebmRepresentation::class,
        "CMAF" => DashCmafRepresentation::class,
        "CHUNKED_TEXT" => DashChunkedTextRepresentation::class,
        "MP4" => DashMp4Representation::class,
        "DRM_MP4" => DashMp4DrmRepresentation::class,
        "PROGRESSIVE_WEBM" => DashProgressiveWebmRepresentation::class,
        "VTT" => DashVttRepresentation::class,
        "SPRITE" => SpriteRepresentation::class,
        "IMSC" => DashImscRepresentation::class,
        "CONTENT_PROTECTION" => ContentProtection::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

