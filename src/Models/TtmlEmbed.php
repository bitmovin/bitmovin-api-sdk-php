<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TtmlEmbed extends BitmovinResource
{
    /** @var StreamInput */
    public $inputStream;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->inputStream = ObjectMapper::map($this->inputStream, StreamInput::class);
    }

    /**
     * The input stream to extract the subtitle from (required)
     *
     * @param StreamInput $inputStream
     * @return $this
     */
    public function inputStream(StreamInput $inputStream)
    {
        $this->inputStream = $inputStream;

        return $this;
    }
}

