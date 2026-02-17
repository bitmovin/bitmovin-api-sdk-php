<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class UpdateEncodingRtmpIngestPointRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\RtmpIngestPoint[] */
    public $ingestPoints;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->ingestPoints = ObjectMapper::map($this->ingestPoints, RtmpIngestPoint::class);
    }

    /**
     * List of ingest points to be updated for the encoding. The RTMPs application name and streamKey will be assigned to the encoding.
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

