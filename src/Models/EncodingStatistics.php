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

    /** @var int */
    public $bytesEgress;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->date = ObjectMapper::map($this->date, Carbon::class);
    }
}

