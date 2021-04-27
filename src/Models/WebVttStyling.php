<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WebVttStyling extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var WebVttStylingMode */
    public $mode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->mode = ObjectMapper::map($this->mode, WebVttStylingMode::class);
    }

    /**
     * mode
     *
     * @param WebVttStylingMode $mode
     * @return $this
     */
    public function mode(WebVttStylingMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }
}

