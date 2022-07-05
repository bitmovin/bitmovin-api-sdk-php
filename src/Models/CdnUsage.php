<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CdnUsage extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $from;

    /** @var Carbon */
    public $to;

    /** @var float */
    public $storageUsage;

    /** @var float */
    public $transferUsage;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->from = ObjectMapper::map($this->from, Carbon::class);
        $this->to = ObjectMapper::map($this->to, Carbon::class);
    }
}

