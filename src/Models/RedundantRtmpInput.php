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

    /** @var \BitmovinApiSdk\Models\StaticRtmpIngestPoint[] */
    public $staticIngestPoints;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->ingestPoints = ObjectMapper::map($this->ingestPoints, RtmpIngestPoint::class);
        $this->staticIngestPoints = ObjectMapper::map($this->staticIngestPoints, StaticRtmpIngestPoint::class);
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
     * Configuration for ingest points that use a dynamic IP based endpoint to stream to e.g.: rtmp://41.167.11.21/live Either ingestPoints **or** staticIngestPoints can be set
     *
     * @param \BitmovinApiSdk\Models\RtmpIngestPoint[] $ingestPoints
     * @return $this
     */
    public function ingestPoints(array $ingestPoints)
    {
        $this->ingestPoints = $ingestPoints;

        return $this;
    }

    /**
     * Configuration for static ingest points. These ingest points use a consistent endpoint to stream to e.g.: rtmps://live-ingest.bitmovin.com/live Either ingestPoints **or** staticIngestPoints can be set
     *
     * @param \BitmovinApiSdk\Models\StaticRtmpIngestPoint[] $staticIngestPoints
     * @return $this
     */
    public function staticIngestPoints(array $staticIngestPoints)
    {
        $this->staticIngestPoints = $staticIngestPoints;

        return $this;
    }
}

