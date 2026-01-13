<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveMediaIngestOutput extends Output
{
    /** @var string */
    public $publishingPoint;

    /** @var bool */
    public $scte35Passthrough;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * URL specifying the publishing point for the output. Can use either http or https. (required)
     *
     * @param string $publishingPoint
     * @return $this
     */
    public function publishingPoint(string $publishingPoint)
    {
        $this->publishingPoint = $publishingPoint;

        return $this;
    }

    /**
     * Enable passthrough of SCTE-35 messages from input to output. Default is false.
     *
     * @param bool $scte35Passthrough
     * @return $this
     */
    public function scte35Passthrough(bool $scte35Passthrough)
    {
        $this->scte35Passthrough = $scte35Passthrough;

        return $this;
    }
}

