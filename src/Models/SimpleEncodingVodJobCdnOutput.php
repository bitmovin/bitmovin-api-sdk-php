<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobCdnOutput extends SimpleEncodingVodJobOutput
{
    /** @var SimpleEncodingLiveMaxResolution */
    public $maxResolution;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->maxResolution = ObjectMapper::map($this->maxResolution, SimpleEncodingLiveMaxResolution::class);
    }

    /**
     * The maximum output resolution to be generated
     *
     * @param SimpleEncodingLiveMaxResolution $maxResolution
     * @return $this
     */
    public function maxResolution(SimpleEncodingLiveMaxResolution $maxResolution)
    {
        $this->maxResolution = $maxResolution;

        return $this;
    }
}

