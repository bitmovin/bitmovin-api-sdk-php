<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Fmp4Muxing extends Muxing
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

    /** @var bool */
    public $writeDurationPerSample;

    /** @var bool */
    public $signalScte35AsEmsg;

    /** @var int */
    public $segmentsMuxed;

    /** @var PTSAlignMode */
    public $ptsAlignMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->ptsAlignMode = ObjectMapper::map($this->ptsAlignMode, PTSAlignMode::class);
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
     * Writes the duration per sample into the sample entry in the Track Fragment Run Box. This could help to fix playback issues on legacy players. Enabling this flag increases the muxing overhead by 4 bytes per sample/frame.
     *
     * @param bool $writeDurationPerSample
     * @return $this
     */
    public function writeDurationPerSample(bool $writeDurationPerSample)
    {
        $this->writeDurationPerSample = $writeDurationPerSample;

        return $this;
    }

    /**
     * Insert scte35 triggers as emsg boxes into the fMP4 segments.
     *
     * @param bool $signalScte35AsEmsg
     * @return $this
     */
    public function signalScte35AsEmsg(bool $signalScte35AsEmsg)
    {
        $this->signalScte35AsEmsg = $signalScte35AsEmsg;

        return $this;
    }

    /**
     * Alignment mode for composition / presentation timestamps (CTS/PTS). Only applies to h.264 and h.265
     *
     * @param PTSAlignMode $ptsAlignMode
     * @return $this
     */
    public function ptsAlignMode(PTSAlignMode $ptsAlignMode)
    {
        $this->ptsAlignMode = $ptsAlignMode;

        return $this;
    }
}

