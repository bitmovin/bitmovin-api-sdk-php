<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class MuxingTypeResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var MuxingType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, MuxingType::class);
    }

    /**
     * The type of the Muxing
     *
     * @param MuxingType $type
     * @return $this
     */
    public function type(MuxingType $type)
    {
        $this->type = $type;

        return $this;
    }
}

