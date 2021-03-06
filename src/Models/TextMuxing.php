<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TextMuxing extends Muxing
{
    /** @var string */
    public $filename;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The output file name (required)
     *
     * @param string $filename
     * @return $this
     */
    public function filename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }
}

