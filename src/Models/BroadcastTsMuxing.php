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

    /** @var InternalChunkLength */
    public $internalChunkLength;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->configuration = ObjectMapper::map($this->configuration, BroadcastTsMuxingConfiguration::class);
        $this->internalChunkLength = ObjectMapper::map($this->internalChunkLength, InternalChunkLength::class);
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

    /**
     * Modifies the internal chunk length used for chunked encoding
     *
     * @param InternalChunkLength $internalChunkLength
     * @return $this
     */
    public function internalChunkLength(InternalChunkLength $internalChunkLength)
    {
        $this->internalChunkLength = $internalChunkLength;

        return $this;
    }
}

