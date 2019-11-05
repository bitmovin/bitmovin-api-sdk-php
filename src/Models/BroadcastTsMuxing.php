<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BroadcastTsMuxing extends Muxing
{
    /** @var float */
    public $segmentLength;

    /** @var string */
    public $filename;

    /** @var BroadcastTsMuxingConfiguration */
    public $configuration;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->configuration = ObjectMapper::map($this->configuration, BroadcastTsMuxingConfiguration::class);
    }

    /**
     * Length of the segments in seconds.
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
     * Name of the new Video
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
     * configuration
     *
     * @param BroadcastTsMuxingConfiguration $configuration
     * @return $this
     */
    public function configuration(BroadcastTsMuxingConfiguration $configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }
}

