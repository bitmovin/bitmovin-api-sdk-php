<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WebVttSidecarFileSegmentation extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $segmentLength;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * The length of the WebVTT fragments in seconds (required)
     *
     * @param float $segmentLength
     * @return $this
     */
    public function segmentLength(float $segmentLength)
    {
        $this->segmentLength = $segmentLength;

        return $this;
    }
}

