<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashImscRepresentation extends DashRepresentation
{
    /** @var string */
    public $imscUrl;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * URL of the referenced IMSC file (required)
     *
     * @param string $imscUrl
     * @return $this
     */
    public function imscUrl(string $imscUrl)
    {
        $this->imscUrl = $imscUrl;

        return $this;
    }
}

