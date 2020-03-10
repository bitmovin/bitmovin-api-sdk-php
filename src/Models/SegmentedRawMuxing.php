<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SegmentedRawMuxing extends Muxing
{
    /** @var float */
    public $segmentLength;

    /** @var string */
    public $segmentNaming;

    /** @var int */
    public $segmentsMuxed;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Length of the fragments in seconds (required)
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
     * Segment naming policy (required)
     *
     * @param string $segmentNaming
     * @return $this
     */
    public function segmentNaming(string $segmentNaming)
    {
        $this->segmentNaming = $segmentNaming;

        return $this;
    }
}

