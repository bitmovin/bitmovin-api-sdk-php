<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SegmentsMediaInfo extends BasicMediaInfo
{
    /** @var string */
    public $segmentPath;

    /** @var string */
    public $encodingId;

    /** @var string */
    public $streamId;

    /** @var string */
    public $muxingId;

    /** @var string */
    public $drmId;

    /** @var int */
    public $startSegmentNumber;

    /** @var int */
    public $endSegmentNumber;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Path to segments. (required)
     *
     * @param string $segmentPath
     * @return $this
     */
    public function segmentPath(string $segmentPath)
    {
        $this->segmentPath = $segmentPath;

        return $this;
    }

    /**
     * Id of the encoding. (required)
     *
     * @param string $encodingId
     * @return $this
     */
    public function encodingId(string $encodingId)
    {
        $this->encodingId = $encodingId;

        return $this;
    }

    /**
     * Id of the stream. (required)
     *
     * @param string $streamId
     * @return $this
     */
    public function streamId(string $streamId)
    {
        $this->streamId = $streamId;

        return $this;
    }

    /**
     * Id of the muxing. (required)
     *
     * @param string $muxingId
     * @return $this
     */
    public function muxingId(string $muxingId)
    {
        $this->muxingId = $muxingId;

        return $this;
    }

    /**
     * Id of the DRM.
     *
     * @param string $drmId
     * @return $this
     */
    public function drmId(string $drmId)
    {
        $this->drmId = $drmId;

        return $this;
    }

    /**
     * Number of the first segment. Default is 0.
     *
     * @param int $startSegmentNumber
     * @return $this
     */
    public function startSegmentNumber(int $startSegmentNumber)
    {
        $this->startSegmentNumber = $startSegmentNumber;

        return $this;
    }

    /**
     * Number of the last segment. Default is the last one that was encoded.
     *
     * @param int $endSegmentNumber
     * @return $this
     */
    public function endSegmentNumber(int $endSegmentNumber)
    {
        $this->endSegmentNumber = $endSegmentNumber;

        return $this;
    }
}

