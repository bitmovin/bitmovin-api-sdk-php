<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveMediaIngestOutput extends Output
{
    /** @var string */
    public $publishingPoint;

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
}

