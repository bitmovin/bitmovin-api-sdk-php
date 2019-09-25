<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CencWidevine extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $pssh;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Base64 encoded pssh payload (required)
     *
     * @param string $pssh
     * @return $this
     */
    public function pssh(string $pssh)
    {
        $this->pssh = $pssh;

        return $this;
    }
}

