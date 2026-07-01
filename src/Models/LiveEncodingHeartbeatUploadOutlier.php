<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatUploadOutlier extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $segmentNumber;

    /** @var string */
    public $encodingReferenceMuxingId;

    /** @var int */
    public $durationMs;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Output segment number this upload belongs to.
     *
     * @param int $segmentNumber
     * @return $this
     */
    public function segmentNumber(int $segmentNumber)
    {
        $this->segmentNumber = $segmentNumber;

        return $this;
    }

    /**
     * Identifier of the muxing whose upload was flagged.
     *
     * @param string $encodingReferenceMuxingId
     * @return $this
     */
    public function encodingReferenceMuxingId(string $encodingReferenceMuxingId)
    {
        $this->encodingReferenceMuxingId = $encodingReferenceMuxingId;

        return $this;
    }

    /**
     * Upload duration in milliseconds.
     *
     * @param int $durationMs
     * @return $this
     */
    public function durationMs(int $durationMs)
    {
        $this->durationMs = $durationMs;

        return $this;
    }
}

