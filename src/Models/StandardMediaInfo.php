<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StandardMediaInfo extends SegmentsMediaInfo
{
    /** @var string */
    public $uri;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * The URI of the Rendition (required)
     *
     * @param string $uri
     * @return $this
     */
    public function uri(string $uri)
    {
        $this->uri = $uri;

        return $this;
    }
}

