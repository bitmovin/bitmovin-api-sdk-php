<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CacheControl extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $cacheControl;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Cache control for storing data on CDN. Example \&quot;public, max-age&#x3D;0, no-cache\&quot;. Cache control is supported on S3, GCS and Azure output storage providers.
     *
     * @param string $cacheControl
     * @return $this
     */
    public function cacheControl(string $cacheControl)
    {
        $this->cacheControl = $cacheControl;

        return $this;
    }
}

