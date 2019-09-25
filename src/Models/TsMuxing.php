<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TsMuxing extends Muxing
{
    /** @var float */
    public $segmentLength;

    /** @var string */
    public $segmentNaming;

    /** @var string */
    public $segmentNamingTemplate;

    /** @var int */
    public $startOffset;

    /** @var int */
    public $segmentsMuxed;

    /** @var TsMuxingConfiguration */
    public $configuration;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->configuration = ObjectMapper::map($this->configuration, TsMuxingConfiguration::class);
    }

    /**
     * Length of the fragments in seconds (required)
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
     * Segment naming policy
     *
     * @param string $segmentNaming
     * @return $this
     */
    public function segmentNaming(string $segmentNaming)
    {
        $this->segmentNaming = $segmentNaming;

        return $this;
    }

    /**
     * Segment naming policy containing a placeholder of the format &#39;{rand_chars:x}&#39;, which will be replaced by a random alphanumeric string of length x (default 32) on each (re)start of the encoding. The resulting string will be copied to the segmentNaming property. Intended to avoid re-use of segment names after restarting a live encoding. If segmentNamingTemplate is set, segmentNaming must not be set.
     *
     * @param string $segmentNamingTemplate
     * @return $this
     */
    public function segmentNamingTemplate(string $segmentNamingTemplate)
    {
        $this->segmentNamingTemplate = $segmentNamingTemplate;

        return $this;
    }

    /**
     * Offset of MPEG-TS timestamps in seconds. E.g., first packet will start with PTS 900,000 for a 10 seconds offset (90,000 MPEG-TS timescale).
     *
     * @param int $startOffset
     * @return $this
     */
    public function startOffset(int $startOffset)
    {
        $this->startOffset = $startOffset;

        return $this;
    }

    /**
     * Advanced Configuration of the MPEG Transport Stream Parameters
     *
     * @param TsMuxingConfiguration $configuration
     * @return $this
     */
    public function configuration(TsMuxingConfiguration $configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }
}

