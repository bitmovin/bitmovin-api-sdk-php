<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class H264PictureTimingTrimmingInputStream extends InputStream
{
    /** @var string */
    public $inputStreamId;

    /** @var string */
    public $startPicTiming;

    /** @var string */
    public $endPicTiming;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * The id of the ingest input stream that should be trimmed
     *
     * @param string $inputStreamId
     * @return $this
     */
    public function inputStreamId(string $inputStreamId)
    {
        $this->inputStreamId = $inputStreamId;

        return $this;
    }

    /**
     * Defines the H264 SEI picture timing, as specified in ISO/IEC 14496-10:2008, of the frame from which the encoding should start. The frame indicated by this value will be included in the encoding
     *
     * @param string $startPicTiming
     * @return $this
     */
    public function startPicTiming(string $startPicTiming)
    {
        $this->startPicTiming = $startPicTiming;

        return $this;
    }

    /**
     * Defines the H264 SEI picture timing, as specified in ISO/IEC 14496-10:2008, of the frame at which the encoding should stop. The frame indicated by this value will be included in the encoding
     *
     * @param string $endPicTiming
     * @return $this
     */
    public function endPicTiming(string $endPicTiming)
    {
        $this->endPicTiming = $endPicTiming;

        return $this;
    }
}

