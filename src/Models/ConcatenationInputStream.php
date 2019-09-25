<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ConcatenationInputStream extends InputStream
{
    /** @var \BitmovinApiSdk\Models\ConcatenationInputConfiguration[] */
    public $concatenation;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->concatenation = ObjectMapper::map($this->concatenation, ConcatenationInputConfiguration::class);
    }

    /**
     * Concatenation configuration for the output of this stream
     *
     * @param \BitmovinApiSdk\Models\ConcatenationInputConfiguration[] $concatenation
     * @return $this
     */
    public function concatenation(array $concatenation)
    {
        $this->concatenation = $concatenation;

        return $this;
    }
}

