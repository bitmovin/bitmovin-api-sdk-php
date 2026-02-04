<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveStandbyPoolEncoding extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $createdAt;

    /** @var string */
    public $modifiedAt;

    /** @var string */
    public $encodingId;

    /** @var \BitmovinApiSdk\Models\LiveStandbyPoolEncodingManifest[] */
    public $manifests;

    /** @var \BitmovinApiSdk\Models\LiveStandbyPoolEncodingIngestPoint[] */
    public $ingestPoints;

    /** @var LiveStandbyPoolEncodingStatus */
    public $status;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->manifests = ObjectMapper::map($this->manifests, LiveStandbyPoolEncodingManifest::class);
        $this->ingestPoints = ObjectMapper::map($this->ingestPoints, LiveStandbyPoolEncodingIngestPoint::class);
        $this->status = ObjectMapper::map($this->status, LiveStandbyPoolEncodingStatus::class);
    }

    /**
     * manifests
     *
     * @param \BitmovinApiSdk\Models\LiveStandbyPoolEncodingManifest[] $manifests
     * @return $this
     */
    public function manifests(array $manifests)
    {
        $this->manifests = $manifests;

        return $this;
    }

    /**
     * status
     *
     * @param LiveStandbyPoolEncodingStatus $status
     * @return $this
     */
    public function status(LiveStandbyPoolEncodingStatus $status)
    {
        $this->status = $status;

        return $this;
    }
}

