<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsAdConfigAd extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $position;

    /** @var string */
    public $url;

    /** @var string */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * position
     *
     * @param string $position
     * @return $this
     */
    public function position(string $position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * url
     *
     * @param string $url
     * @return $this
     */
    public function url(string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * type
     *
     * @param string $type
     * @return $this
     */
    public function type(string $type)
    {
        $this->type = $type;

        return $this;
    }
}

