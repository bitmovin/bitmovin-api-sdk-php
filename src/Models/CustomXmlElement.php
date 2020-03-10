<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CustomXmlElement extends BitmovinResponse
{
    /** @var string */
    public $data;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * String representation of the XML element (required)
     *
     * @param string $data
     * @return $this
     */
    public function data(string $data)
    {
        $this->data = $data;

        return $this;
    }
}

