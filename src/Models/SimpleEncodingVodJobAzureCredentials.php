<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobAzureCredentials extends SimpleEncodingVodJobCredentials
{
    /** @var string */
    public $key;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Azure Account Key used for authentication (required)
     *
     * @param string $key
     * @return $this
     */
    public function key(string $key)
    {
        $this->key = $key;

        return $this;
    }
}

