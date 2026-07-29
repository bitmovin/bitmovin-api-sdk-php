<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Song extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $name;

    /** @var string */
    public $artist;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * name
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * artist
     *
     * @param string $artist
     * @return $this
     */
    public function artist(string $artist)
    {
        $this->artist = $artist;

        return $this;
    }
}

