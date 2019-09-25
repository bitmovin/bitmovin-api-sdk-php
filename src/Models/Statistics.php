<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Statistics extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $bytesEncodedTotal;

    /** @var int */
    public $timeEncodedTotal;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Bytes encoded total. (required)
     *
     * @param int $bytesEncodedTotal
     * @return $this
     */
    public function bytesEncodedTotal(int $bytesEncodedTotal)
    {
        $this->bytesEncodedTotal = $bytesEncodedTotal;

        return $this;
    }

    /**
     * Time in seconds encoded for all contained daily statistics. (required)
     *
     * @param int $timeEncodedTotal
     * @return $this
     */
    public function timeEncodedTotal(int $timeEncodedTotal)
    {
        $this->timeEncodedTotal = $timeEncodedTotal;

        return $this;
    }
}

