<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CacheControlSettingsDash extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var CacheControl */
    public $timelineManifest;

    /** @var CacheControl */
    public $templateManifest;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->timelineManifest = ObjectMapper::map($this->timelineManifest, CacheControl::class);
        $this->templateManifest = ObjectMapper::map($this->templateManifest, CacheControl::class);
    }

    /**
     * Cache control settings for DASH Timeline manifest.
     *
     * @param CacheControl $timelineManifest
     * @return $this
     */
    public function timelineManifest(CacheControl $timelineManifest)
    {
        $this->timelineManifest = $timelineManifest;

        return $this;
    }

    /**
     * Cache control settings for DASH Template manifest.
     *
     * @param CacheControl $templateManifest
     * @return $this
     */
    public function templateManifest(CacheControl $templateManifest)
    {
        $this->templateManifest = $templateManifest;

        return $this;
    }
}

