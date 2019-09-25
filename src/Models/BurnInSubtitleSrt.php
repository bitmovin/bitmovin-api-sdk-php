<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BurnInSubtitleSrt extends BitmovinResource
{
    /** @var CaptionCharacterEncoding */
    public $characterEncoding;

    /** @var InputPath */
    public $input;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->characterEncoding = ObjectMapper::map($this->characterEncoding, CaptionCharacterEncoding::class);
        $this->input = ObjectMapper::map($this->input, InputPath::class);
    }

    /**
     * Character encoding of the SRT file (required)
     *
     * @param CaptionCharacterEncoding $characterEncoding
     * @return $this
     */
    public function characterEncoding(CaptionCharacterEncoding $characterEncoding)
    {
        $this->characterEncoding = $characterEncoding;

        return $this;
    }

    /**
     * The input location to get the SRT file from (required)
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

