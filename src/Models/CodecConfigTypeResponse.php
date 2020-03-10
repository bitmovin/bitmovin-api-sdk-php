<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CodecConfigTypeResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var CodecConfigType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, CodecConfigType::class);
    }

    /**
     * The type of the codec config
     *
     * @param CodecConfigType $type
     * @return $this
     */
    public function type(CodecConfigType $type)
    {
        $this->type = $type;

        return $this;
    }
}

