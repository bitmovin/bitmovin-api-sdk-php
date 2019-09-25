<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AppliedStreamSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $width;

    /** @var int */
    public $height;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * The applied width. Useful if the width in the configuration was undefined
     *
     * @param int $width
     * @return $this
     */
    public function width(int $width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * The applied height. Useful if the height in the configuration was undefined
     *
     * @param int $height
     * @return $this
     */
    public function height(int $height)
    {
        $this->height = $height;

        return $this;
    }
}

