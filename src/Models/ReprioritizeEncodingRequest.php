<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ReprioritizeEncodingRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $priority;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Priority of the Encoding (required)
     *
     * @param int $priority
     * @return $this
     */
    public function priority(int $priority)
    {
        $this->priority = $priority;

        return $this;
    }
}

