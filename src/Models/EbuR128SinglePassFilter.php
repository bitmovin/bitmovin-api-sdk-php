<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EbuR128SinglePassFilter extends Filter
{
    /** @var float */
    public $integratedLoudness;

    /** @var float */
    public $loudnessRange;

    /** @var float */
    public $maximumTruePeakLevel;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Set the targeted integrated loudness value. Range is from &#39;-70.0&#39; to &#39;-5.0&#39;. Default value is &#39;-24.0&#39;. Value is measured in LUFS (Loudness Units, referenced to Full Scale)
     *
     * @param float $integratedLoudness
     * @return $this
     */
    public function integratedLoudness(float $integratedLoudness)
    {
        $this->integratedLoudness = $integratedLoudness;

        return $this;
    }

    /**
     * Set the targeted loudness range target. Range is from &#39;1.0&#39; to &#39;20.0&#39;. Default value is &#39;7.0&#39;. Loudness range measures the variation of loudness on a macroscopic time-scale in units of LU (Loudness Units). For programmes shorter than 1 minute, the use of the measure Loudness Range is not recommended due to too few data points (Loudness Range is based on the Short-term-Loudness values (3-seconds-window)).
     *
     * @param float $loudnessRange
     * @return $this
     */
    public function loudnessRange(float $loudnessRange)
    {
        $this->loudnessRange = $loudnessRange;

        return $this;
    }

    /**
     * Set maximum true peak. Range is from &#39;-9.0&#39; to &#39;0.0&#39;. Default value is &#39;-2.0&#39;. Values are measured in dBTP (db True Peak)
     *
     * @param float $maximumTruePeakLevel
     * @return $this
     */
    public function maximumTruePeakLevel(float $maximumTruePeakLevel)
    {
        $this->maximumTruePeakLevel = $maximumTruePeakLevel;

        return $this;
    }
}

