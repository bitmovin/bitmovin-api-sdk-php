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

    /** @var int */
    public $hTiles;

    /** @var int */
    public $vTiles;

    /** @var SpriteJpegConfig */
    public $jpegConfig;

    /** @var SpriteCreationMode */
    public $creationMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->unit = ObjectMapper::map($this->unit, SpriteUnit::class);
        $this->outputs = ObjectMapper::map($this->outputs, EncodingOutput::class);
        $this->jpegConfig = ObjectMapper::map($this->jpegConfig, SpriteJpegConfig::class);
        $this->creationMode = ObjectMapper::map($this->creationMode, SpriteCreationMode::class);
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
     * Name of the sprite image. File extension \&quot;.jpg\&quot;/\&quot;.jpeg\&quot; or \&quot;.png\&quot; is required. (required)
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

    /**
     * Number of rows of images per file.  Has to be set together with vTiles. If this property and vTiles are set, the imagesPerFile property must not be set.  It is recommended to use the placeholder &#39;%number%&#39; in the spriteName to allow the generation of multiple sprites.  Only supported starting with encoder version &#x60;2.76.0&#x60;.
     *
     * @param int $hTiles
     * @return $this
     */
    public function hTiles(int $hTiles)
    {
        $this->hTiles = $hTiles;

        return $this;
    }

    /**
     * Number of columns of images per file.  Has to be set together with hTiles. If this property and hTiles are set, the imagesPerFile property must not be set.  It is recommended to use the placeholder &#39;%number%&#39; in the spriteName to allow the generation of multiple sprites.  Only supported starting with encoder version &#x60;2.76.0&#x60;.
     *
     * @param int $vTiles
     * @return $this
     */
    public function vTiles(int $vTiles)
    {
        $this->vTiles = $vTiles;

        return $this;
    }

    /**
     * Additional configuration for JPEG sprite generation.  If this property is set the extension of the file must be &#39;.jpg.&#39; or &#39;.jpeg&#39;  Only supported starting with encoder version &#x60;2.76.0&#x60;
     *
     * @param SpriteJpegConfig $jpegConfig
     * @return $this
     */
    public function jpegConfig(SpriteJpegConfig $jpegConfig)
    {
        $this->jpegConfig = $jpegConfig;

        return $this;
    }

    /**
     * The creation mode for the thumbnails in the Sprite.  Two possible creation modes exist: generate thumbnails starting with the beginning of the video or after the first configured period.  When using distance&#x3D;10 and unit&#x3D;SECONDS and INTERVAL_END, the first image of the sprite is from the second 10 of the video. When using distance&#x3D;10 and unit&#x3D;SECONDS and INTERVAL_START, the first image of the sprite is from the very start of the video, while the second image is from second 10 of the video.  It is recommended to use &#39;INTERVAL_START&#39; when using the sprites for trick play so that there is an additional thumbnail from the beginning of the video.  Only supported starting with encoder version &#x60;2.76.0&#x60;.
     *
     * @param SpriteCreationMode $creationMode
     * @return $this
     */
    public function creationMode(SpriteCreationMode $creationMode)
    {
        $this->creationMode = $creationMode;

        return $this;
    }
}

