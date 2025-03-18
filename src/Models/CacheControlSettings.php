<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CacheControlSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var CacheControlSettingsHls */
    public $hls;

    /** @var CacheControlSettingsDash */
    public $dash;

    /** @var CacheControlSettingsSegments */
    public $segments;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->hls = ObjectMapper::map($this->hls, CacheControlSettingsHls::class);
        $this->dash = ObjectMapper::map($this->dash, CacheControlSettingsDash::class);
        $this->segments = ObjectMapper::map($this->segments, CacheControlSettingsSegments::class);
    }

    /**
     * Cache control settings for HLS manifest.
     *
     * @param CacheControlSettingsHls $hls
     * @return $this
     */
    public function hls(CacheControlSettingsHls $hls)
    {
        $this->hls = $hls;

        return $this;
    }

    /**
     * Cache control settings for DASH manifest.
     *
     * @param CacheControlSettingsDash $dash
     * @return $this
     */
    public function dash(CacheControlSettingsDash $dash)
    {
        $this->dash = $dash;

        return $this;
    }

    /**
     * Cache control settings for segments.
     *
     * @param CacheControlSettingsSegments $segments
     * @return $this
     */
    public function segments(CacheControlSettingsSegments $segments)
    {
        $this->segments = $segments;

        return $this;
    }
}

