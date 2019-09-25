<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ChunkedTextMuxing extends Muxing
{
    /** @var float */
    public $segmentLength;

    /** @var string */
    public $segmentNaming;

    /** @var string */
    public $segmentNamingTemplate;

    /** @var int */
    public $segmentsMuxed;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Length of the segments in seconds (required)
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
     * Segment naming template
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
     * Segment naming template with placeholders which will be replaced during the encoding. The result will be saved in segmentNaming. {rand:4} gets replaced with an alphanumeric string of length specified after the colon. Defaults to 32. If this field is set, segmentNaming must not be specified.
     *
     * @param string $segmentNamingTemplate
     * @return $this
     */
    public function segmentNamingTemplate(string $segmentNamingTemplate)
    {
        $this->segmentNamingTemplate = $segmentNamingTemplate;

        return $this;
    }
}

