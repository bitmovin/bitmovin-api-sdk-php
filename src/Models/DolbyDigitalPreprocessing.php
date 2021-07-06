<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyDigitalPreprocessing extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var DolbyDigitalDynamicRangeCompression */
    public $dynamicRangeCompression;

    /** @var DolbyDigitalLfeLowPassFilter */
    public $lfeLowPassFilter;

    /** @var DolbyDigitalNinetyDegreePhaseShift */
    public $ninetyDegreePhaseShift;

    /** @var DolbyDigitalThreeDbAttenuation */
    public $threeDbAttenuation;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->dynamicRangeCompression = ObjectMapper::map($this->dynamicRangeCompression, DolbyDigitalDynamicRangeCompression::class);
        $this->lfeLowPassFilter = ObjectMapper::map($this->lfeLowPassFilter, DolbyDigitalLfeLowPassFilter::class);
        $this->ninetyDegreePhaseShift = ObjectMapper::map($this->ninetyDegreePhaseShift, DolbyDigitalNinetyDegreePhaseShift::class);
        $this->threeDbAttenuation = ObjectMapper::map($this->threeDbAttenuation, DolbyDigitalThreeDbAttenuation::class);
    }

    /**
     * It indicates a gain change to be applied in the Dolby Digital decoder in order to implement dynamic range compression.  The values typically indicate gain reductions (cut) during loud passages and gain increases (boost) during quiet passages based on desired compression characteristics.
     *
     * @param DolbyDigitalDynamicRangeCompression $dynamicRangeCompression
     * @return $this
     */
    public function dynamicRangeCompression(DolbyDigitalDynamicRangeCompression $dynamicRangeCompression)
    {
        $this->dynamicRangeCompression = $dynamicRangeCompression;

        return $this;
    }

    /**
     * It applies a 120 Hz low-pass filter to the low-frequency effects (LFE) channel.  This is only allowed if the &#x60;channelLayout&#x60; contains a LFE channel.
     *
     * @param DolbyDigitalLfeLowPassFilter $lfeLowPassFilter
     * @return $this
     */
    public function lfeLowPassFilter(DolbyDigitalLfeLowPassFilter $lfeLowPassFilter)
    {
        $this->lfeLowPassFilter = $lfeLowPassFilter;

        return $this;
    }

    /**
     * ninetyDegreePhaseShift
     *
     * @param DolbyDigitalNinetyDegreePhaseShift $ninetyDegreePhaseShift
     * @return $this
     */
    public function ninetyDegreePhaseShift(DolbyDigitalNinetyDegreePhaseShift $ninetyDegreePhaseShift)
    {
        $this->ninetyDegreePhaseShift = $ninetyDegreePhaseShift;

        return $this;
    }

    /**
     * threeDbAttenuation
     *
     * @param DolbyDigitalThreeDbAttenuation $threeDbAttenuation
     * @return $this
     */
    public function threeDbAttenuation(DolbyDigitalThreeDbAttenuation $threeDbAttenuation)
    {
        $this->threeDbAttenuation = $threeDbAttenuation;

        return $this;
    }
}

