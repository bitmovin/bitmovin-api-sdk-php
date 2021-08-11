<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DtsAudioConfiguration extends AudioConfiguration
{
    /** @var DtsMode */
    public $mode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->mode = ObjectMapper::map($this->mode, DtsMode::class);
    }

    /**
     * There are two DTS modes available: DTS Express Audio (EXPRESS_AUDIO) and DTS Digital Surround (DIGITAL_SURROUND)
     *
     * @param DtsMode $mode
     * @return $this
     */
    public function mode(DtsMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }
}

