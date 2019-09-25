<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Av1VideoConfiguration extends VideoConfiguration
{
    /** @var Av1KeyPlacementMode */
    public $keyPlacementMode;

    /** @var Av1AdaptiveQuantMode */
    public $adaptiveQuantMode;

    /** @var int */
    public $lagInFrames;

    /** @var int */
    public $minQ;

    /** @var int */
    public $maxQ;

    /** @var int */
    public $undershootPct;

    /** @var int */
    public $overshootPct;

    /** @var int */
    public $clientBufferSize;

    /** @var int */
    public $clientInitialBufferSize;

    /** @var int */
    public $clientOptimalBufferSize;

    /** @var int */
    public $tileColumns;

    /** @var int */
    public $tileRows;

    /** @var bool */
    public $isAutomaticAltRefFramesEnabled;

    /** @var int */
    public $arnrMaxFrames;

    /** @var int */
    public $arnrStrength;

    /** @var int */
    public $maxIntraRate;

    /** @var bool */
    public $isLossless;

    /** @var bool */
    public $isFrameParallel;

    /** @var int */
    public $sharpness;

    /** @var bool */
    public $isFrameBoostEnabled;

    /** @var bool */
    public $noiseSensitivity;

    /** @var int */
    public $minGfInterval;

    /** @var int */
    public $maxGfInterval;

    /** @var int */
    public $numTileGroups;

    /** @var int */
    public $mtuSize;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->keyPlacementMode = ObjectMapper::map($this->keyPlacementMode, Av1KeyPlacementMode::class);
        $this->adaptiveQuantMode = ObjectMapper::map($this->adaptiveQuantMode, Av1AdaptiveQuantMode::class);
    }

    /**
     * keyPlacementMode
     *
     * @param Av1KeyPlacementMode $keyPlacementMode
     * @return $this
     */
    public function keyPlacementMode(Av1KeyPlacementMode $keyPlacementMode)
    {
        $this->keyPlacementMode = $keyPlacementMode;

        return $this;
    }

    /**
     * adaptiveQuantMode
     *
     * @param Av1AdaptiveQuantMode $adaptiveQuantMode
     * @return $this
     */
    public function adaptiveQuantMode(Av1AdaptiveQuantMode $adaptiveQuantMode)
    {
        $this->adaptiveQuantMode = $adaptiveQuantMode;

        return $this;
    }

    /**
     * Number of frames to look ahead for alternate reference frame selection
     *
     * @param int $lagInFrames
     * @return $this
     */
    public function lagInFrames(int $lagInFrames)
    {
        $this->lagInFrames = $lagInFrames;

        return $this;
    }

    /**
     * Minimum (best quality) quantizer
     *
     * @param int $minQ
     * @return $this
     */
    public function minQ(int $minQ)
    {
        $this->minQ = $minQ;

        return $this;
    }

    /**
     * Maximum (worst quality) quantizer
     *
     * @param int $maxQ
     * @return $this
     */
    public function maxQ(int $maxQ)
    {
        $this->maxQ = $maxQ;

        return $this;
    }

    /**
     * Rate control adaptation undershoot control
     *
     * @param int $undershootPct
     * @return $this
     */
    public function undershootPct(int $undershootPct)
    {
        $this->undershootPct = $undershootPct;

        return $this;
    }

    /**
     * Rate control adaptation overshoot control
     *
     * @param int $overshootPct
     * @return $this
     */
    public function overshootPct(int $overshootPct)
    {
        $this->overshootPct = $overshootPct;

        return $this;
    }

    /**
     * Decoder buffer size in milliseconds
     *
     * @param int $clientBufferSize
     * @return $this
     */
    public function clientBufferSize(int $clientBufferSize)
    {
        $this->clientBufferSize = $clientBufferSize;

        return $this;
    }

    /**
     * Decoder buffer initial size in milliseconds
     *
     * @param int $clientInitialBufferSize
     * @return $this
     */
    public function clientInitialBufferSize(int $clientInitialBufferSize)
    {
        $this->clientInitialBufferSize = $clientInitialBufferSize;

        return $this;
    }

    /**
     * Decoder buffer optimal size in milliseconds
     *
     * @param int $clientOptimalBufferSize
     * @return $this
     */
    public function clientOptimalBufferSize(int $clientOptimalBufferSize)
    {
        $this->clientOptimalBufferSize = $clientOptimalBufferSize;

        return $this;
    }

    /**
     * Number of tile columns to use, log2
     *
     * @param int $tileColumns
     * @return $this
     */
    public function tileColumns(int $tileColumns)
    {
        $this->tileColumns = $tileColumns;

        return $this;
    }

    /**
     * Number of tile rows to use, log2
     *
     * @param int $tileRows
     * @return $this
     */
    public function tileRows(int $tileRows)
    {
        $this->tileRows = $tileRows;

        return $this;
    }

    /**
     * Enable automatic set and use alf frames
     *
     * @param bool $isAutomaticAltRefFramesEnabled
     * @return $this
     */
    public function isAutomaticAltRefFramesEnabled(bool $isAutomaticAltRefFramesEnabled)
    {
        $this->isAutomaticAltRefFramesEnabled = $isAutomaticAltRefFramesEnabled;

        return $this;
    }

    /**
     * The max number of frames to create arf
     *
     * @param int $arnrMaxFrames
     * @return $this
     */
    public function arnrMaxFrames(int $arnrMaxFrames)
    {
        $this->arnrMaxFrames = $arnrMaxFrames;

        return $this;
    }

    /**
     * The filter strength for the arf
     *
     * @param int $arnrStrength
     * @return $this
     */
    public function arnrStrength(int $arnrStrength)
    {
        $this->arnrStrength = $arnrStrength;

        return $this;
    }

    /**
     * Maximum data rate for intra frames, expressed as a percentage of the average per-frame bitrate. Default value 0 meaning unlimited
     *
     * @param int $maxIntraRate
     * @return $this
     */
    public function maxIntraRate(int $maxIntraRate)
    {
        $this->maxIntraRate = $maxIntraRate;

        return $this;
    }

    /**
     * Lossless encoding mode
     *
     * @param bool $isLossless
     * @return $this
     */
    public function isLossless(bool $isLossless)
    {
        $this->isLossless = $isLossless;

        return $this;
    }

    /**
     * Enable frame parallel decoding feature
     *
     * @param bool $isFrameParallel
     * @return $this
     */
    public function isFrameParallel(bool $isFrameParallel)
    {
        $this->isFrameParallel = $isFrameParallel;

        return $this;
    }

    /**
     * Sets the sharpness
     *
     * @param int $sharpness
     * @return $this
     */
    public function sharpness(int $sharpness)
    {
        $this->sharpness = $sharpness;

        return $this;
    }

    /**
     * Enable quality boost by lowering frame level Q periodically
     *
     * @param bool $isFrameBoostEnabled
     * @return $this
     */
    public function isFrameBoostEnabled(bool $isFrameBoostEnabled)
    {
        $this->isFrameBoostEnabled = $isFrameBoostEnabled;

        return $this;
    }

    /**
     * Enable noise sensitivity on Y channel
     *
     * @param bool $noiseSensitivity
     * @return $this
     */
    public function noiseSensitivity(bool $noiseSensitivity)
    {
        $this->noiseSensitivity = $noiseSensitivity;

        return $this;
    }

    /**
     * Minimum interval between GF/ARF frames
     *
     * @param int $minGfInterval
     * @return $this
     */
    public function minGfInterval(int $minGfInterval)
    {
        $this->minGfInterval = $minGfInterval;

        return $this;
    }

    /**
     * Maximum interval between GF/ARF frames
     *
     * @param int $maxGfInterval
     * @return $this
     */
    public function maxGfInterval(int $maxGfInterval)
    {
        $this->maxGfInterval = $maxGfInterval;

        return $this;
    }

    /**
     * Maximum number of tile groups
     *
     * @param int $numTileGroups
     * @return $this
     */
    public function numTileGroups(int $numTileGroups)
    {
        $this->numTileGroups = $numTileGroups;

        return $this;
    }

    /**
     * Maximum number of bytes in a tile group
     *
     * @param int $mtuSize
     * @return $this
     */
    public function mtuSize(int $mtuSize)
    {
        $this->mtuSize = $mtuSize;

        return $this;
    }
}

