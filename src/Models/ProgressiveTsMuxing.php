<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ProgressiveTsMuxing extends Muxing
{
    /** @var float */
    public $segmentLength;

    /** @var string */
    public $filename;

    /** @var int */
    public $startOffset;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Length of the segments in seconds
     *
     * @param float $segmentLength
     * @return $this
     */
    public function segmentLength(float $segmentLength)
    {
        $this->segmentLength = $segmentLength;

        return $this;
    }

    /**
     * Name of the output file
     *
     * @param string $filename
     * @return $this
     */
    public function filename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Offset of MPEG-TS timestamps in seconds. e.g. first packet will start with PTS 900,000 for a 10 seconds offset (90,000 MPEG-TS timescale).
     *
     * @param int $startOffset
     * @return $this
     */
    public function startOffset(int $startOffset)
    {
        $this->startOffset = $startOffset;

        return $this;
    }
}

