<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class UnsharpFilter extends Filter
{
    /** @var int */
    public $lumaMatrixHorizontalSize;

    /** @var int */
    public $lumaMatrixVerticalSize;

    /** @var float */
    public $lumaEffectStrength;

    /** @var int */
    public $chromaMatrixHorizontalSize;

    /** @var int */
    public $chromaMatrixVerticalSize;

    /** @var float */
    public $chromaEffectStrength;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Must be an odd integer between 3 and 23
     *
     * @param int $lumaMatrixHorizontalSize
     * @return $this
     */
    public function lumaMatrixHorizontalSize(int $lumaMatrixHorizontalSize)
    {
        $this->lumaMatrixHorizontalSize = $lumaMatrixHorizontalSize;

        return $this;
    }

    /**
     * Must be an odd integer between 3 and 23
     *
     * @param int $lumaMatrixVerticalSize
     * @return $this
     */
    public function lumaMatrixVerticalSize(int $lumaMatrixVerticalSize)
    {
        $this->lumaMatrixVerticalSize = $lumaMatrixVerticalSize;

        return $this;
    }

    /**
     * Negative value: blur, positive value: sharpen, floating point number, valid value range: -1.5 - 1.5
     *
     * @param float $lumaEffectStrength
     * @return $this
     */
    public function lumaEffectStrength(float $lumaEffectStrength)
    {
        $this->lumaEffectStrength = $lumaEffectStrength;

        return $this;
    }

    /**
     * Must be an odd integer between 3 and 23
     *
     * @param int $chromaMatrixHorizontalSize
     * @return $this
     */
    public function chromaMatrixHorizontalSize(int $chromaMatrixHorizontalSize)
    {
        $this->chromaMatrixHorizontalSize = $chromaMatrixHorizontalSize;

        return $this;
    }

    /**
     * Must be an odd integer between 3 and 23
     *
     * @param int $chromaMatrixVerticalSize
     * @return $this
     */
    public function chromaMatrixVerticalSize(int $chromaMatrixVerticalSize)
    {
        $this->chromaMatrixVerticalSize = $chromaMatrixVerticalSize;

        return $this;
    }

    /**
     * Negative value: blur, positive value: sharpen, floating point number, valid value range: -1.5 - 1.5
     *
     * @param float $chromaEffectStrength
     * @return $this
     */
    public function chromaEffectStrength(float $chromaEffectStrength)
    {
        $this->chromaEffectStrength = $chromaEffectStrength;

        return $this;
    }
}

