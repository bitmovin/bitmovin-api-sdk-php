<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class OutputTypeResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var OutputType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->type = ObjectMapper::map($this->type, OutputType::class);
    }

    /**
     * The type of the output
     *
     * @param OutputType $type
     * @return $this
     */
    public function type(OutputType $type)
    {
        $this->type = $type;

        return $this;
    }
}

