<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class RedundantRtmpInput extends Input
{
    /** @var int */
    public $delayThreshold;

    /** @var \BitmovinApiSdk\Models\RtmpIngestPoint[] */
    public $ingestPoints;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->ingestPoints = ObjectMapper::map($this->ingestPoints, RtmpIngestPoint::class);
    }

    /**
     * When there is no input signal present and this threshold in seconds is reached it will switch to another ingest point
     *
     * @param int $delayThreshold
     * @return $this
     */
    public function delayThreshold(int $delayThreshold)
    {
        $this->delayThreshold = $delayThreshold;

        return $this;
    }

    /**
     * ingestPoints
     *
     * @param \BitmovinApiSdk\Models\RtmpIngestPoint[] $ingestPoints
     * @return $this
     */
    public function ingestPoints(array $ingestPoints)
    {
        $this->ingestPoints = $ingestPoints;

        return $this;
    }
}

