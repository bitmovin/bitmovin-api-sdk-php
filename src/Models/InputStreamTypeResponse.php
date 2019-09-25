<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InputStreamTypeResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var InputStreamType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->type = ObjectMapper::map($this->type, InputStreamType::class);
    }

    /**
     * The type of the input stream
     *
     * @param InputStreamType $type
     * @return $this
     */
    public function type(InputStreamType $type)
    {
        $this->type = $type;

        return $this;
    }
}

