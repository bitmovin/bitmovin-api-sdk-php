<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ConvertSccCaptionWebVttSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\ConvertSccPositionMode */
    public $positionMode;

    /** @var bool */
    public $removeFlash;

    /** @var bool */
    public $removeColor;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->positionMode = ObjectMapper::map($this->positionMode, ConvertSccPositionMode::class);
    }

    /**
     * positionMode
     *
     * @param \BitmovinApiSdk\Models\ConvertSccPositionMode $positionMode
     * @return $this
     */
    public function positionMode(\BitmovinApiSdk\Models\ConvertSccPositionMode $positionMode)
    {
        $this->positionMode = $positionMode;

        return $this;
    }

    /**
     * Remove flash (blinking) information when converting SCC to WebVTT
     *
     * @param bool $removeFlash
     * @return $this
     */
    public function removeFlash(bool $removeFlash)
    {
        $this->removeFlash = $removeFlash;

        return $this;
    }

    /**
     * Remove color information when converting SCC to WebVTT
     *
     * @param bool $removeColor
     * @return $this
     */
    public function removeColor(bool $removeColor)
    {
        $this->removeColor = $removeColor;

        return $this;
    }
}

