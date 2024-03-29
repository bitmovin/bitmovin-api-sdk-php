<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobOutput extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\SimpleEncodingVodJobOutputArtifact[] */
    public $artifacts;

    public static $discriminatorName = "type";
    public static $discriminatorMapping = [
        "URL" => SimpleEncodingVodJobUrlOutput::class,
        "CDN" => SimpleEncodingVodJobCdnOutput::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->artifacts = ObjectMapper::map($this->artifacts, SimpleEncodingVodJobOutputArtifact::class);
    }
}

