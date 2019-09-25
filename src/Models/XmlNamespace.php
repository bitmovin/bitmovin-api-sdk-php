<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class XmlNamespace extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $prefix;

    /** @var string */
    public $uri;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Name of the XML Namespace reference (required)
     *
     * @param string $prefix
     * @return $this
     */
    public function prefix(string $prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * Source of the XML Namespace reference (required)
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

