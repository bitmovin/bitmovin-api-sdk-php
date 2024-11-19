<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveStandbyPoolEncodingManifest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $url;

    /** @var string */
    public $manifestId;

    /** @var LiveStandbyPoolEncodingManifestType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, LiveStandbyPoolEncodingManifestType::class);
    }
}

