<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SccCaption extends BitmovinResource
{
    /** @var InputPath */
    public $input;

    /** @var SmpteTimecodeFlavor */
    public $smpteTimecodeFlavor;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->input = ObjectMapper::map($this->input, InputPath::class);
        $this->smpteTimecodeFlavor = ObjectMapper::map($this->smpteTimecodeFlavor, SmpteTimecodeFlavor::class);
    }

    /**
     * Input location of the SCC file (required)
     *
     * @param InputPath $input
     * @return $this
     */
    public function input(InputPath $input)
    {
        $this->input = $input;

        return $this;
    }

    /**
     * Flavor of SMPTE timecodes in the SCC file (drop-frame or non-drop)
     *
     * @param SmpteTimecodeFlavor $smpteTimecodeFlavor
     * @return $this
     */
    public function smpteTimecodeFlavor(SmpteTimecodeFlavor $smpteTimecodeFlavor)
    {
        $this->smpteTimecodeFlavor = $smpteTimecodeFlavor;

        return $this;
    }
}

