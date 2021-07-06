<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyDigitalPlusPreprocessing extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var DolbyDigitalPlusDynamicRangeCompression */
    public $dynamicRangeCompression;

    /** @var DolbyDigitalPlusLfeLowPassFilter */
    public $lfeLowPassFilter;

    /** @var DolbyDigitalPlusNinetyDegreePhaseShift */
    public $ninetyDegreePhaseShift;

    /** @var DolbyDigitalPlusThreeDbAttenuation */
    public $threeDbAttenuation;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->dynamicRangeCompression = ObjectMapper::map($this->dynamicRangeCompression, DolbyDigitalPlusDynamicRangeCompression::class);
        $this->lfeLowPassFilter = ObjectMapper::map($this->lfeLowPassFilter, DolbyDigitalPlusLfeLowPassFilter::class);
        $this->ninetyDegreePhaseShift = ObjectMapper::map($this->ninetyDegreePhaseShift, DolbyDigitalPlusNinetyDegreePhaseShift::class);
        $this->threeDbAttenuation = ObjectMapper::map($this->threeDbAttenuation, DolbyDigitalPlusThreeDbAttenuation::class);
    }

    /**
     * It indicates a gain change to be applied in the Dolby Digital decoder in order to implement dynamic range compression.  The values typically indicate gain reductions (cut) during loud passages and gain increases (boost) during quiet passages based on desired compression characteristics.
     *
     * @param DolbyDigitalPlusDynamicRangeCompression $dynamicRangeCompression
     * @return $this
     */
    public function dynamicRangeCompression(DolbyDigitalPlusDynamicRangeCompression $dynamicRangeCompression)
    {
        $this->dynamicRangeCompression = $dynamicRangeCompression;

        return $this;
    }

    /**
     * It applies a 120 Hz low-pass filter to the low-frequency effects (LFE) channel.  This is only allowed if the &#x60;channelLayout&#x60; contains a LFE channel.
     *
     * @param DolbyDigitalPlusLfeLowPassFilter $lfeLowPassFilter
     * @return $this
     */
    public function lfeLowPassFilter(DolbyDigitalPlusLfeLowPassFilter $lfeLowPassFilter)
    {
        $this->lfeLowPassFilter = $lfeLowPassFilter;

        return $this;
    }

    /**
     * ninetyDegreePhaseShift
     *
     * @param DolbyDigitalPlusNinetyDegreePhaseShift $ninetyDegreePhaseShift
     * @return $this
     */
    public function ninetyDegreePhaseShift(DolbyDigitalPlusNinetyDegreePhaseShift $ninetyDegreePhaseShift)
    {
        $this->ninetyDegreePhaseShift = $ninetyDegreePhaseShift;

        return $this;
    }

    /**
     * threeDbAttenuation
     *
     * @param DolbyDigitalPlusThreeDbAttenuation $threeDbAttenuation
     * @return $this
     */
    public function threeDbAttenuation(DolbyDigitalPlusThreeDbAttenuation $threeDbAttenuation)
    {
        $this->threeDbAttenuation = $threeDbAttenuation;

        return $this;
    }
}

