<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ColorConfig extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var bool */
    public $copyChromaLocationFlag;

    /** @var bool */
    public $copyColorSpaceFlag;

    /** @var bool */
    public $copyColorPrimariesFlag;

    /** @var bool */
    public $copyColorRangeFlag;

    /** @var bool */
    public $copyColorTransferFlag;

    /** @var ChromaLocation */
    public $chromaLocation;

    /** @var ColorSpace */
    public $colorSpace;

    /** @var ColorPrimaries */
    public $colorPrimaries;

    /** @var ColorRange */
    public $colorRange;

    /** @var ColorTransfer */
    public $colorTransfer;

    /** @var InputColorSpace */
    public $inputColorSpace;

    /** @var InputColorRange */
    public $inputColorRange;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->chromaLocation = ObjectMapper::map($this->chromaLocation, ChromaLocation::class);
        $this->colorSpace = ObjectMapper::map($this->colorSpace, ColorSpace::class);
        $this->colorPrimaries = ObjectMapper::map($this->colorPrimaries, ColorPrimaries::class);
        $this->colorRange = ObjectMapper::map($this->colorRange, ColorRange::class);
        $this->colorTransfer = ObjectMapper::map($this->colorTransfer, ColorTransfer::class);
        $this->inputColorSpace = ObjectMapper::map($this->inputColorSpace, InputColorSpace::class);
        $this->inputColorRange = ObjectMapper::map($this->inputColorRange, InputColorRange::class);
    }

    /**
     * Copy the chroma location setting from the input source
     *
     * @param bool $copyChromaLocationFlag
     * @return $this
     */
    public function copyChromaLocationFlag(bool $copyChromaLocationFlag)
    {
        $this->copyChromaLocationFlag = $copyChromaLocationFlag;

        return $this;
    }

    /**
     * Copy the color space setting from the input source
     *
     * @param bool $copyColorSpaceFlag
     * @return $this
     */
    public function copyColorSpaceFlag(bool $copyColorSpaceFlag)
    {
        $this->copyColorSpaceFlag = $copyColorSpaceFlag;

        return $this;
    }

    /**
     * Copy the color primaries setting from the input source
     *
     * @param bool $copyColorPrimariesFlag
     * @return $this
     */
    public function copyColorPrimariesFlag(bool $copyColorPrimariesFlag)
    {
        $this->copyColorPrimariesFlag = $copyColorPrimariesFlag;

        return $this;
    }

    /**
     * Copy the color range setting from the input source
     *
     * @param bool $copyColorRangeFlag
     * @return $this
     */
    public function copyColorRangeFlag(bool $copyColorRangeFlag)
    {
        $this->copyColorRangeFlag = $copyColorRangeFlag;

        return $this;
    }

    /**
     * Copy the color transfer setting from the input source
     *
     * @param bool $copyColorTransferFlag
     * @return $this
     */
    public function copyColorTransferFlag(bool $copyColorTransferFlag)
    {
        $this->copyColorTransferFlag = $copyColorTransferFlag;

        return $this;
    }

    /**
     * The chroma location to be applied
     *
     * @param ChromaLocation $chromaLocation
     * @return $this
     */
    public function chromaLocation(ChromaLocation $chromaLocation)
    {
        $this->chromaLocation = $chromaLocation;

        return $this;
    }

    /**
     * The color space to be applied
     *
     * @param ColorSpace $colorSpace
     * @return $this
     */
    public function colorSpace(ColorSpace $colorSpace)
    {
        $this->colorSpace = $colorSpace;

        return $this;
    }

    /**
     * The color primaries to be applied
     *
     * @param ColorPrimaries $colorPrimaries
     * @return $this
     */
    public function colorPrimaries(ColorPrimaries $colorPrimaries)
    {
        $this->colorPrimaries = $colorPrimaries;

        return $this;
    }

    /**
     * The color range to be applied
     *
     * @param ColorRange $colorRange
     * @return $this
     */
    public function colorRange(ColorRange $colorRange)
    {
        $this->colorRange = $colorRange;

        return $this;
    }

    /**
     * The color transfer to be applied
     *
     * @param ColorTransfer $colorTransfer
     * @return $this
     */
    public function colorTransfer(ColorTransfer $colorTransfer)
    {
        $this->colorTransfer = $colorTransfer;

        return $this;
    }

    /**
     * Override the color space detected in the input file. If not set the input color space will be automatically detected if possible.
     *
     * @param InputColorSpace $inputColorSpace
     * @return $this
     */
    public function inputColorSpace(InputColorSpace $inputColorSpace)
    {
        $this->inputColorSpace = $inputColorSpace;

        return $this;
    }

    /**
     * Override the color range detected in the input file. If not set the input color range will be automatically detected if possible.
     *
     * @param InputColorRange $inputColorRange
     * @return $this
     */
    public function inputColorRange(InputColorRange $inputColorRange)
    {
        $this->inputColorRange = $inputColorRange;

        return $this;
    }
}

