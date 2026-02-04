<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveStandbyPoolAcquireEncoding extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\LiveStandbyPoolEncodingIngestPoint[] */
    public $ingestPoints;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->ingestPoints = ObjectMapper::map($this->ingestPoints, LiveStandbyPoolEncodingIngestPoint::class);
    }

    /**
     * Note: This is not implemented yet and will be ignored if provided. List of ingest points to be used for the acquired encoding. The DNS hostname and RTMPs application name and streamKey will be assigned to the encoding.
     *
     * @param \BitmovinApiSdk\Models\LiveStandbyPoolEncodingIngestPoint[] $ingestPoints
     * @return $this
     */
    public function ingestPoints(array $ingestPoints)
    {
        $this->ingestPoints = $ingestPoints;

        return $this;
    }
}

