<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ImscStyling extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var ImscStylingMode */
    public $mode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->mode = ObjectMapper::map($this->mode, ImscStylingMode::class);
    }

    /**
     * mode
     *
     * @param ImscStylingMode $mode
     * @return $this
     */
    public function mode(ImscStylingMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }
}

