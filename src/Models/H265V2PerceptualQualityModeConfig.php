<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class H265V2PerceptualQualityModeConfig extends H265V2RateControlModeConfig
{
    /** @var H265V2PerceptualEncodingMode */
    public $perceptualEncodingMode;

    /** @var float */
    public $perceptualStrength;

    /** @var float */
    public $perceptualPenaltyStrength;

    /** @var float */
    public $perceptualPenaltyKnee;

    /** @var float */
    public $perceptualTemporalStrength;

    /** @var float */
    public $pixelPerDegree;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->perceptualEncodingMode = ObjectMapper::map($this->perceptualEncodingMode, H265V2PerceptualEncodingMode::class);
    }

    /**
     * HVS-based perceptual encoding mode.
     *
     * @param H265V2PerceptualEncodingMode $perceptualEncodingMode
     * @return $this
     */
    public function perceptualEncodingMode(H265V2PerceptualEncodingMode $perceptualEncodingMode)
    {
        $this->perceptualEncodingMode = $perceptualEncodingMode;

        return $this;
    }

    /**
     * Overall strength of perceptual model (0.0-1.0).
     *
     * @param float $perceptualStrength
     * @return $this
     */
    public function perceptualStrength(float $perceptualStrength)
    {
        $this->perceptualStrength = $perceptualStrength;

        return $this;
    }

    /**
     * Strength of penalties from perceptual model (0.0-1.0).
     *
     * @param float $perceptualPenaltyStrength
     * @return $this
     */
    public function perceptualPenaltyStrength(float $perceptualPenaltyStrength)
    {
        $this->perceptualPenaltyStrength = $perceptualPenaltyStrength;

        return $this;
    }

    /**
     * Knee point of penalty strength modulation (0.0-1.0).
     *
     * @param float $perceptualPenaltyKnee
     * @return $this
     */
    public function perceptualPenaltyKnee(float $perceptualPenaltyKnee)
    {
        $this->perceptualPenaltyKnee = $perceptualPenaltyKnee;

        return $this;
    }

    /**
     * Strength of temporal component of perceptual model (0.0-1.0).
     *
     * @param float $perceptualTemporalStrength
     * @return $this
     */
    public function perceptualTemporalStrength(float $perceptualTemporalStrength)
    {
        $this->perceptualTemporalStrength = $perceptualTemporalStrength;

        return $this;
    }

    /**
     * Pixels per degree (horizontal), i.e. width / FOV.
     *
     * @param float $pixelPerDegree
     * @return $this
     */
    public function pixelPerDegree(float $pixelPerDegree)
    {
        $this->pixelPerDegree = $pixelPerDegree;

        return $this;
    }
}

