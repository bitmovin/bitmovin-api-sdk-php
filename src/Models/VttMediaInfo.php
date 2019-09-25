<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class VttMediaInfo extends BasicMediaInfo
{
    /** @var string */
    public $vttUrl;

    /** @var string */
    public $uri;

    /** @var bool */
    public $forced;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * The URL of the referenced VTT file (required)
     *
     * @param string $vttUrl
     * @return $this
     */
    public function vttUrl(string $vttUrl)
    {
        $this->vttUrl = $vttUrl;

        return $this;
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

    /**
     * A value of true indicates that the Rendition contains content which is considered essential to play.
     *
     * @param bool $forced
     * @return $this
     */
    public function forced(bool $forced)
    {
        $this->forced = $forced;

        return $this;
    }
}

