<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ImscConfiguration extends SubtitleConfiguration
{
    /** @var ImscStyling */
    public $styling;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->styling = ObjectMapper::map($this->styling, ImscStyling::class);
    }

    /**
     * styling
     *
     * @param ImscStyling $styling
     * @return $this
     */
    public function styling(ImscStyling $styling)
    {
        $this->styling = $styling;

        return $this;
    }
}

