<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Sprite extends BitmovinResource
{
    /** @var int */
    public $height;

    /** @var int */
    public $width;

    /** @var SpriteUnit */
    public $unit;

    /** @var float */
    public $distance;

    /** @var string */
    public $spriteName;

    /** @var string */
    public $filename;

    /** @var string */
    public $vttName;

    /** @var \BitmovinApiSdk\Models\EncodingOutput[] */
    public $outputs;

    /** @var int */
    public $imagesPerFile;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->unit = ObjectMapper::map($this->unit, SpriteUnit::class);
        $this->outputs = ObjectMapper::map($this->outputs, EncodingOutput::class);
    }

    /**
     * Height of one thumbnail (required)
     *
     * @param int $height
     * @return $this
     */
    public function height(int $height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Width of one thumbnail (required)
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
     * unit
     *
     * @param SpriteUnit $unit
     * @return $this
     */
    public function unit(SpriteUnit $unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Distance in the given unit between a screenshot
     *
     * @param float $distance
     * @return $this
     */
    public function distance(float $distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Name of the sprite image. File extension \&quot;.jpg\&quot; or \&quot;.png\&quot; is required. (required)
     *
     * @param string $spriteName
     * @return $this
     */
    public function spriteName(string $spriteName)
    {
        $this->spriteName = $spriteName;

        return $this;
    }

    /**
     * Filename of the sprite image. If not set, spriteName will be used, but without an extension.
     *
     * @param string $filename
     * @return $this
     */
    public function filename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Filename of the vtt-file. The file-extension \&quot;.vtt\&quot; is required.
     *
     * @param string $vttName
     * @return $this
     */
    public function vttName(string $vttName)
    {
        $this->vttName = $vttName;

        return $this;
    }

    /**
     * outputs
     *
     * @param \BitmovinApiSdk\Models\EncodingOutput[] $outputs
     * @return $this
     */
    public function outputs(array $outputs)
    {
        $this->outputs = $outputs;

        return $this;
    }

    /**
     * Number of images per file. If more images are generated than specified in this value, multiple sprites will be created. You can use the placeholder &#39;%number%&#39; in the spriteName to specify the naming policy. Either this property must be set or hTiles and vTiles.
     *
     * @param int $imagesPerFile
     * @return $this
     */
    public function imagesPerFile(int $imagesPerFile)
    {
        $this->imagesPerFile = $imagesPerFile;

        return $this;
    }
}

