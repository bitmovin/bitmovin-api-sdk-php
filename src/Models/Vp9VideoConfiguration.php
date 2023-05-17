<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Vp9VideoConfiguration extends VideoConfiguration
{
    /** @var PresetConfiguration */
    public $presetConfiguration;

    /** @var Vp9DynamicRangeFormat */
    public $dynamicRangeFormat;

    /** @var int */
    public $crf;

    /** @var int */
    public $lagInFrames;

    /** @var bool */
    public $errorResiliencyEnabled;

    /** @var int */
    public $tileColumns;

    /** @var int */
    public $tileRows;

    /** @var bool */
    public $frameParallel;

    /** @var int */
    public $maxIntraRate;

    /** @var int */
    public $qpMin;

    /** @var int */
    public $qpMax;

    /** @var int */
    public $rateUndershootPct;

    /** @var int */
    public $rateOvershootPct;

    /** @var int */
    public $clientBufferSize;

    /** @var int */
    public $clientInitialBufferSize;

    /** @var int */
    public $biasPct;

    /** @var bool */
    public $noiseSensitivity;

    /** @var int */
    public $cpuUsed;

    /** @var bool */
    public $automaticAltRefFramesEnabled;

    /** @var int */
    public $targetLevel;

    /** @var bool */
    public $rowMultiThreadingEnabled;

    /** @var int */
    public $sharpness;

    /** @var int */
    public $minGop;

    /** @var int */
    public $maxGop;

    /** @var float */
    public $minKeyframeInterval;

    /** @var float */
    public $maxKeyframeInterval;

    /** @var Vp9Quality */
    public $quality;

    /** @var bool */
    public $lossless;

    /** @var int */
    public $staticThresh;

    /** @var Vp9AqMode */
    public $aqMode;

    /** @var int */
    public $arnrMaxFrames;

    /** @var int */
    public $arnrStrength;

    /** @var Vp9ArnrType */
    public $arnrType;

    /** @var AutoLevelSetup */
    public $autoLevelSetup;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->presetConfiguration = ObjectMapper::map($this->presetConfiguration, PresetConfiguration::class);
        $this->dynamicRangeFormat = ObjectMapper::map($this->dynamicRangeFormat, Vp9DynamicRangeFormat::class);
        $this->quality = ObjectMapper::map($this->quality, Vp9Quality::class);
        $this->aqMode = ObjectMapper::map($this->aqMode, Vp9AqMode::class);
        $this->arnrType = ObjectMapper::map($this->arnrType, Vp9ArnrType::class);
        $this->autoLevelSetup = ObjectMapper::map($this->autoLevelSetup, AutoLevelSetup::class);
    }

    /**
     * Choose from a set of preset configurations tailored for common use cases. Check out [VP9 Presets](https://bitmovin.com/docs/encoding/tutorials/vp9-presets) to see which values get applied by each preset. Explicitly setting a property to a different value will override the preset&#39;s value for that property.
     *
     * @param PresetConfiguration $presetConfiguration
     * @return $this
     */
    public function presetConfiguration(PresetConfiguration $presetConfiguration)
    {
        $this->presetConfiguration = $presetConfiguration;

        return $this;
    }

    /**
     * Automatically configures the VP9 Video Codec to be compatible with the given SDR/HLG format. Bitmovin recommends to use the dynamic range format together with a preset configuration to achieve good results. Explicitly configured properties will take precedence over dynamic range format settings, which in turn will take precedence over preset configurations.
     *
     * @param Vp9DynamicRangeFormat $dynamicRangeFormat
     * @return $this
     */
    public function dynamicRangeFormat(Vp9DynamicRangeFormat $dynamicRangeFormat)
    {
        $this->dynamicRangeFormat = $dynamicRangeFormat;

        return $this;
    }

    /**
     * Constant rate factor for quality-based variable bitrate. Either bitrate or crf is required.
     *
     * @param int $crf
     * @return $this
     */
    public function crf(int $crf)
    {
        $this->crf = $crf;

        return $this;
    }

    /**
     * Number of frames to look ahead for alternate reference frame selection.
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
     * Enables error resiliency feature
     *
     * @param bool $errorResiliencyEnabled
     * @return $this
     */
    public function errorResiliencyEnabled(bool $errorResiliencyEnabled)
    {
        $this->errorResiliencyEnabled = $errorResiliencyEnabled;

        return $this;
    }

    /**
     * Number of tile columns to use, log2. Depending on the encoding width there are limitations on this value. The minimum values are 2 for width &gt;&#x3D; 1920 and 1 for width &gt;&#x3D; 1280. The minimum width of each tile is 256 pixels so the maximum values are 0 for width &lt; 256, 1 for width &lt; 512, 2 for width &lt; 1024, 3 for width &lt; 2048, 4 for width &lt; 4096, 5 for width &lt; 8192. If the value is too high or too low it will be overridden.
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
     * Number of tile rows to use, log2.
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
     * Enable frame parallel decodability features
     *
     * @param bool $frameParallel
     * @return $this
     */
    public function frameParallel(bool $frameParallel)
    {
        $this->frameParallel = $frameParallel;

        return $this;
    }

    /**
     * Maximum I-frame bitrate (percentage) 0&#x3D;unlimited
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
     * Minimum quantization factor.
     *
     * @param int $qpMin
     * @return $this
     */
    public function qpMin(int $qpMin)
    {
        $this->qpMin = $qpMin;

        return $this;
    }

    /**
     * Maximum quantization factor.
     *
     * @param int $qpMax
     * @return $this
     */
    public function qpMax(int $qpMax)
    {
        $this->qpMax = $qpMax;

        return $this;
    }

    /**
     * Datarate undershoot (min) target (percentage).
     *
     * @param int $rateUndershootPct
     * @return $this
     */
    public function rateUndershootPct(int $rateUndershootPct)
    {
        $this->rateUndershootPct = $rateUndershootPct;

        return $this;
    }

    /**
     * Datarate overshoot (max) target (percentage).
     *
     * @param int $rateOvershootPct
     * @return $this
     */
    public function rateOvershootPct(int $rateOvershootPct)
    {
        $this->rateOvershootPct = $rateOvershootPct;

        return $this;
    }

    /**
     * Client buffer size (ms)
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
     * Client initial buffer size (ms)
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
     * CBR/VBR bias (0&#x3D;CBR, 100&#x3D;VBR)
     *
     * @param int $biasPct
     * @return $this
     */
    public function biasPct(int $biasPct)
    {
        $this->biasPct = $biasPct;

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
     * Controls the tradeoff between compression efficiency and encoding speed. Higher values indicate a faster encoding. The minimum value for width * height &gt;&#x3D; 1280 * 720 is 2. If the value is too low it will be overridden.
     *
     * @param int $cpuUsed
     * @return $this
     */
    public function cpuUsed(int $cpuUsed)
    {
        $this->cpuUsed = $cpuUsed;

        return $this;
    }

    /**
     * Enable automatic alternate reference frames (2pass only)
     *
     * @param bool $automaticAltRefFramesEnabled
     * @return $this
     */
    public function automaticAltRefFramesEnabled(bool $automaticAltRefFramesEnabled)
    {
        $this->automaticAltRefFramesEnabled = $automaticAltRefFramesEnabled;

        return $this;
    }

    /**
     * Target level (255: off, 0: only keep level stats; 10: level 1.0; 11: level 1.1; ... 62: level 6.2)
     *
     * @param int $targetLevel
     * @return $this
     */
    public function targetLevel(int $targetLevel)
    {
        $this->targetLevel = $targetLevel;

        return $this;
    }

    /**
     * Enable row based non-deterministic multi-threading
     *
     * @param bool $rowMultiThreadingEnabled
     * @return $this
     */
    public function rowMultiThreadingEnabled(bool $rowMultiThreadingEnabled)
    {
        $this->rowMultiThreadingEnabled = $rowMultiThreadingEnabled;

        return $this;
    }

    /**
     * Loop filter sharpness.
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
     * Minimum GOP length, the minimum distance between I-frames.
     *
     * @param int $minGop
     * @return $this
     */
    public function minGop(int $minGop)
    {
        $this->minGop = $minGop;

        return $this;
    }

    /**
     * Maximum GOP length, the maximum distance between I-frames
     *
     * @param int $maxGop
     * @return $this
     */
    public function maxGop(int $maxGop)
    {
        $this->maxGop = $maxGop;

        return $this;
    }

    /**
     * Minimum interval in seconds between key frames
     *
     * @param float $minKeyframeInterval
     * @return $this
     */
    public function minKeyframeInterval(float $minKeyframeInterval)
    {
        $this->minKeyframeInterval = $minKeyframeInterval;

        return $this;
    }

    /**
     * Maximum interval in seconds between key frames
     *
     * @param float $maxKeyframeInterval
     * @return $this
     */
    public function maxKeyframeInterval(float $maxKeyframeInterval)
    {
        $this->maxKeyframeInterval = $maxKeyframeInterval;

        return $this;
    }

    /**
     * quality
     *
     * @param Vp9Quality $quality
     * @return $this
     */
    public function quality(Vp9Quality $quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Lossless mode
     *
     * @param bool $lossless
     * @return $this
     */
    public function lossless(bool $lossless)
    {
        $this->lossless = $lossless;

        return $this;
    }

    /**
     * A change threshold on blocks below which they will be skipped by the encoder.
     *
     * @param int $staticThresh
     * @return $this
     */
    public function staticThresh(int $staticThresh)
    {
        $this->staticThresh = $staticThresh;

        return $this;
    }

    /**
     * aqMode
     *
     * @param Vp9AqMode $aqMode
     * @return $this
     */
    public function aqMode(Vp9AqMode $aqMode)
    {
        $this->aqMode = $aqMode;

        return $this;
    }

    /**
     * altref noise reduction max frame count.
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
     * altref noise reduction filter strength.
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
     * arnrType
     *
     * @param Vp9ArnrType $arnrType
     * @return $this
     */
    public function arnrType(Vp9ArnrType $arnrType)
    {
        $this->arnrType = $arnrType;

        return $this;
    }

    /**
     * Enable/disable automatic calculation of level, maxBitrate, and bufsize based on the least level that satisfies maximum property values for picture resolution, frame rate, and bit rate. In the case the target level is set explicitly, the maximum bitrate and buffer size are calculated based on the defined level. Explicitly setting rateOvershootPct, or clientBufferSize properties will disable the automatic calculation.
     *
     * @param AutoLevelSetup $autoLevelSetup
     * @return $this
     */
    public function autoLevelSetup(AutoLevelSetup $autoLevelSetup)
    {
        $this->autoLevelSetup = $autoLevelSetup;

        return $this;
    }
}

