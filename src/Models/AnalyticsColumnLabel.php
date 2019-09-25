<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsColumnLabel extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $key;

    /** @var string */
    public $label;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * key
     *
     * @param string $key
     * @return $this
     */
    public function key(string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * label
     *
     * @param string $label
     * @return $this
     */
    public function label(string $label)
    {
        $this->label = $label;

        return $this;
    }
}

