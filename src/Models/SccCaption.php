<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SccCaption extends BitmovinResource
{
    /** @var InputPath */
    public $input;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->input = ObjectMapper::map($this->input, InputPath::class);
    }

    /**
     * The input location to get the scc file from (required)
     *
     * @param InputPath $input
     * @return $this
     */
    public function input(InputPath $input)
    {
        $this->input = $input;

        return $this;
    }
}

