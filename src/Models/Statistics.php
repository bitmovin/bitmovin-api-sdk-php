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

    /** @var int */
    public $bytesEgressTotal;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }
}

