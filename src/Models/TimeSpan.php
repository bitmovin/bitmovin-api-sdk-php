<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TimeSpan extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $from;

    /** @var int */
    public $to;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Start offset of the time frame in milliseconds (required)
     *
     * @param int $from
     * @return $this
     */
    public function from(int $from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * End offset of the time frame in milliseconds (required)
     *
     * @param int $to
     * @return $this
     */
    public function to(int $to)
    {
        $this->to = $to;

        return $this;
    }
}

