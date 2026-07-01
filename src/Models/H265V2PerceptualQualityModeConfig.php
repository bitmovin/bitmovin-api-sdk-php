<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class H265V2PerceptualQualityModeConfig extends H265V2RateControlModeConfig
{
    /** @var int */
    public $percept;

    /** @var float */
    public $percStr;

    /** @var float */
    public $percPenaltyStr;

    /** @var float */
    public $percPenaltyKnee;

    /** @var float */
    public $percTemporalStr;

    /** @var float */
    public $pixelPerDegree;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * HVS-based perceptual encoding mode (0:off 1:cudqp 2:+quant).
     *
     * @param int $percept
     * @return $this
     */
    public function percept(int $percept)
    {
        $this->percept = $percept;

        return $this;
    }

    /**
     * Overall strength of perceptual model (0.0-1.0).
     *
     * @param float $percStr
     * @return $this
     */
    public function percStr(float $percStr)
    {
        $this->percStr = $percStr;

        return $this;
    }

    /**
     * Strength of penalties from perceptual model (0.0-1.0).
     *
     * @param float $percPenaltyStr
     * @return $this
     */
    public function percPenaltyStr(float $percPenaltyStr)
    {
        $this->percPenaltyStr = $percPenaltyStr;

        return $this;
    }

    /**
     * Knee point of penalty strength modulation (0.0-1.0).
     *
     * @param float $percPenaltyKnee
     * @return $this
     */
    public function percPenaltyKnee(float $percPenaltyKnee)
    {
        $this->percPenaltyKnee = $percPenaltyKnee;

        return $this;
    }

    /**
     * Strength of temporal component of perceptual model (0.0-1.0).
     *
     * @param float $percTemporalStr
     * @return $this
     */
    public function percTemporalStr(float $percTemporalStr)
    {
        $this->percTemporalStr = $percTemporalStr;

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

