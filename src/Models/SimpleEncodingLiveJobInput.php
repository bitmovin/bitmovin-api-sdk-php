<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingLiveJobInput extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var SimpleEncodingLiveJobInputType */
    public $inputType;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->inputType = ObjectMapper::map($this->inputType, SimpleEncodingLiveJobInputType::class);
    }

    /**
     * Defines which protocol is being used as input of the live stream.
     *
     * @param SimpleEncodingLiveJobInputType $inputType
     * @return $this
     */
    public function inputType(SimpleEncodingLiveJobInputType $inputType)
    {
        $this->inputType = $inputType;

        return $this;
    }
}

