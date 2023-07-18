<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingOptionsStatistics extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $encodingId;

    /** @var float */
    public $unitsUsed;

    /** @var \BitmovinApiSdk\Models\LiveOptionsType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, LiveOptionsType::class);
    }

    /**
     * type
     *
     * @param \BitmovinApiSdk\Models\LiveOptionsType $type
     * @return $this
     */
    public function type(\BitmovinApiSdk\Models\LiveOptionsType $type)
    {
        $this->type = $type;

        return $this;
    }
}

