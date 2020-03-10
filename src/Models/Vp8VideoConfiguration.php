<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Vp8VideoConfiguration extends VideoConfiguration
{
    /** @var int */
    public $crf;

    /** @var int */
    public $lagInFrames;

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
    public $cpuUsed;

    /** @var Vp8NoiseSensitivity */
    public $noiseSensitivity;

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

    /** @var Vp8Quality */
    public $quality;

    /** @var int */
    public $staticThresh;

    /** @var int */
    public $arnrMaxFrames;

    /** @var int */
    public $arnrStrength;

    /** @var Vp8ArnrType */
    public $arnrType;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->noiseSensitivity = ObjectMapper::map($this->noiseSensitivity, Vp8NoiseSensitivity::class);
        $this->quality = ObjectMapper::map($this->quality, Vp8Quality::class);
        $this->arnrType = ObjectMapper::map($this->arnrType, Vp8ArnrType::class);
    }

    /**
     * Sets the constant rate factor for quality-based variable bitrate. Either bitrate or crf is required.
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
     * Sets the minimum of quantization factor.
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
     * Sets the maximum of quantization factor.
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
     * noiseSensitivity
     *
     * @param Vp8NoiseSensitivity $noiseSensitivity
     * @return $this
     */
    public function noiseSensitivity(Vp8NoiseSensitivity $noiseSensitivity)
    {
        $this->noiseSensitivity = $noiseSensitivity;

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
     * @param Vp8Quality $quality
     * @return $this
     */
    public function quality(Vp8Quality $quality)
    {
        $this->quality = $quality;

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
     * @param Vp8ArnrType $arnrType
     * @return $this
     */
    public function arnrType(Vp8ArnrType $arnrType)
    {
        $this->arnrType = $arnrType;

        return $this;
    }
}

