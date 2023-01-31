<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ProgressiveWebmMuxing extends Muxing
{
    /** @var string */
    public $filename;

    /** @var ProgressiveWebmMuxingManifestType */
    public $manifestType;

    /** @var float */
    public $segmentLength;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->manifestType = ObjectMapper::map($this->manifestType, ProgressiveWebmMuxingManifestType::class);
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
     * manifestType
     *
     * @param ProgressiveWebmMuxingManifestType $manifestType
     * @return $this
     */
    public function manifestType(ProgressiveWebmMuxingManifestType $manifestType)
    {
        $this->manifestType = $manifestType;

        return $this;
    }

    /**
     * Determines the length of segments in seconds if manifestType is set to DASH_ON_DEMAND. Defaults to 4 seconds
     *
     * @param float $segmentLength
     * @return $this
     */
    public function segmentLength(float $segmentLength)
    {
        $this->segmentLength = $segmentLength;

        return $this;
    }
}

