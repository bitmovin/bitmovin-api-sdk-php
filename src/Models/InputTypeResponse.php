<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InputTypeResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var InputType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->type = ObjectMapper::map($this->type, InputType::class);
    }

    /**
     * The type of the input
     *
     * @param InputType $type
     * @return $this
     */
    public function type(InputType $type)
    {
        $this->type = $type;

        return $this;
    }
}

