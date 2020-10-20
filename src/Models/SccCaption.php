<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SccCaption extends BitmovinResource
{
    /** @var InputPath */
    public $input;

    /** @var \BitmovinApiSdk\Models\SmpteTimecodeFlavor */
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
     * smpteTimecodeFlavor
     *
     * @param \BitmovinApiSdk\Models\SmpteTimecodeFlavor $smpteTimecodeFlavor
     * @return $this
     */
    public function smpteTimecodeFlavor(\BitmovinApiSdk\Models\SmpteTimecodeFlavor $smpteTimecodeFlavor)
    {
        $this->smpteTimecodeFlavor = $smpteTimecodeFlavor;

        return $this;
    }
}

