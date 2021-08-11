<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TimecodeTrackTrimmingInputStream extends InputStream
{
    /** @var string */
    public $inputStreamId;

    /** @var string */
    public $startTimeCode;

    /** @var string */
    public $endTimeCode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The id of the ingest input stream that should be trimmed (required)
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
     * Defines the timecode, in SMPTE-12M format, of the frame from which the encoding should start. The frame indicated by this value will be included in the encoding (required)
     *
     * @param string $startTimeCode
     * @return $this
     */
    public function startTimeCode(string $startTimeCode)
    {
        $this->startTimeCode = $startTimeCode;

        return $this;
    }

    /**
     * Defines the timecode, in SMPTE-12M format, of the frame at which the encoding should stop. The frame indicated by this value will be included in the encoding (required)
     *
     * @param string $endTimeCode
     * @return $this
     */
    public function endTimeCode(string $endTimeCode)
    {
        $this->endTimeCode = $endTimeCode;

        return $this;
    }
}

