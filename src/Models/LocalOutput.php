<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LocalOutput extends Output
{
    /** @var string */
    public $path;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Path to your local storage (required)
     *
     * @param string $path
     * @return $this
     */
    public function path(string $path)
    {
        $this->path = $path;

        return $this;
    }
}

