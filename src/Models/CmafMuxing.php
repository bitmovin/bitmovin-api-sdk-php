<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CmafMuxing extends Muxing
{
    /** @var float */
    public $segmentLength;

    /** @var string */
    public $segmentNaming;

    /** @var string */
    public $segmentNamingTemplate;

    /** @var string */
    public $initSegmentName;

    /** @var string */
    public $initSegmentNameTemplate;

    /** @var int */
    public $segmentsMuxed;

    /** @var int */
    public $framesPerCmafChunk;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
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
     * Segment naming policy containing one or both of the following placeholders: - &#39;{rand_chars:x}&#39;, which will be replaced by a random alphanumeric string of length x (default 32)   on each (re)start of the encoding. The resulting string will be copied to the segmentNaming property.   Intended to avoid re-use of segment names after restarting a live encoding. - &#39;{segment_rand_chars:x}&#39;, which will be replaced by a random alphanumeric string of length x (default 32)   for each different segment. This is intended to avoid guessing segment URLs by replacing segment numbers.  If segmentNamingTemplate is set, segmentNaming must not be set.
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
     * Init segment name
     *
     * @param string $initSegmentName
     * @return $this
     */
    public function initSegmentName(string $initSegmentName)
    {
        $this->initSegmentName = $initSegmentName;

        return $this;
    }

    /**
     * Segment naming policy containing a placeholder of the format &#39;{rand_chars:x}&#39;, which will be replaced by a random alphanumeric string of length x (default 32) on each (re)start of the encoding. The resulting string will be copied to the initSegmentName property. Intended to avoid re-use of segment names after restarting a live encoding. If initSegmentNameTemplate is set, initSegmentName must not be set.
     *
     * @param string $initSegmentNameTemplate
     * @return $this
     */
    public function initSegmentNameTemplate(string $initSegmentNameTemplate)
    {
        $this->initSegmentNameTemplate = $initSegmentNameTemplate;

        return $this;
    }

    /**
     * Number of media frames per CMAF chunk. Defaults to: Length of a segment in frames. Minimum: 1. Maximum: Length of a segment in frames.
     *
     * @param int $framesPerCmafChunk
     * @return $this
     */
    public function framesPerCmafChunk(int $framesPerCmafChunk)
    {
        $this->framesPerCmafChunk = $framesPerCmafChunk;

        return $this;
    }
}

