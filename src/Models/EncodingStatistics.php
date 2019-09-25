<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingStatistics extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $date;

    /** @var int */
    public $bytesEncoded;

    /** @var int */
    public $timeEncoded;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->date = ObjectMapper::map($this->date, Carbon::class);
    }

    /**
     * Date, format. yyyy-MM-dd (required)
     *
     * @param Carbon $date
     * @return $this
     */
    public function date(Carbon $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Bytes encoded for this encoding. (required)
     *
     * @param int $bytesEncoded
     * @return $this
     */
    public function bytesEncoded(int $bytesEncoded)
    {
        $this->bytesEncoded = $bytesEncoded;

        return $this;
    }

    /**
     * Time in seconds encoded for this encoding. (required)
     *
     * @param int $timeEncoded
     * @return $this
     */
    public function timeEncoded(int $timeEncoded)
    {
        $this->timeEncoded = $timeEncoded;

        return $this;
    }
}

