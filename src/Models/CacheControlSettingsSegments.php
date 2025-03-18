<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CacheControlSettingsSegments extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var CacheControl */
    public $initSegment;

    /** @var CacheControl */
    public $mediaSegment;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->initSegment = ObjectMapper::map($this->initSegment, CacheControl::class);
        $this->mediaSegment = ObjectMapper::map($this->mediaSegment, CacheControl::class);
    }

    /**
     * Cache control settings for init segment.
     *
     * @param CacheControl $initSegment
     * @return $this
     */
    public function initSegment(CacheControl $initSegment)
    {
        $this->initSegment = $initSegment;

        return $this;
    }

    /**
     * Cache control settings for media segment.
     *
     * @param CacheControl $mediaSegment
     * @return $this
     */
    public function mediaSegment(CacheControl $mediaSegment)
    {
        $this->mediaSegment = $mediaSegment;

        return $this;
    }
}

