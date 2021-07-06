<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyDigitalPlusDownmixing extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var DolbyDigitalPlusCenterMixLevel */
    public $loRoCenterMixLevel;

    /** @var DolbyDigitalPlusCenterMixLevel */
    public $ltRtCenterMixLevel;

    /** @var DolbyDigitalPlusSurroundMixLevel */
    public $loRoSurroundMixLevel;

    /** @var DolbyDigitalPlusSurroundMixLevel */
    public $ltRtSurroundMixLevel;

    /** @var DolbyDigitalPlusDownmixingPreferredMode */
    public $preferredMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->loRoCenterMixLevel = ObjectMapper::map($this->loRoCenterMixLevel, DolbyDigitalPlusCenterMixLevel::class);
        $this->ltRtCenterMixLevel = ObjectMapper::map($this->ltRtCenterMixLevel, DolbyDigitalPlusCenterMixLevel::class);
        $this->loRoSurroundMixLevel = ObjectMapper::map($this->loRoSurroundMixLevel, DolbyDigitalPlusSurroundMixLevel::class);
        $this->ltRtSurroundMixLevel = ObjectMapper::map($this->ltRtSurroundMixLevel, DolbyDigitalPlusSurroundMixLevel::class);
        $this->preferredMode = ObjectMapper::map($this->preferredMode, DolbyDigitalPlusDownmixingPreferredMode::class);
    }

    /**
     * The level shift applied to the C channel when adding to the L and R outputs as a result of downmixing to one Lo/Ro output.
     *
     * @param DolbyDigitalPlusCenterMixLevel $loRoCenterMixLevel
     * @return $this
     */
    public function loRoCenterMixLevel(DolbyDigitalPlusCenterMixLevel $loRoCenterMixLevel)
    {
        $this->loRoCenterMixLevel = $loRoCenterMixLevel;

        return $this;
    }

    /**
     * The level shift applied to the C channel when adding to the L and R outputs as a result of downmixing to one Lt/Rt output.
     *
     * @param DolbyDigitalPlusCenterMixLevel $ltRtCenterMixLevel
     * @return $this
     */
    public function ltRtCenterMixLevel(DolbyDigitalPlusCenterMixLevel $ltRtCenterMixLevel)
    {
        $this->ltRtCenterMixLevel = $ltRtCenterMixLevel;

        return $this;
    }

    /**
     * The level shift applied to the surround channels when downmixing to one Lo/Ro output.
     *
     * @param DolbyDigitalPlusSurroundMixLevel $loRoSurroundMixLevel
     * @return $this
     */
    public function loRoSurroundMixLevel(DolbyDigitalPlusSurroundMixLevel $loRoSurroundMixLevel)
    {
        $this->loRoSurroundMixLevel = $loRoSurroundMixLevel;

        return $this;
    }

    /**
     * The level shift applied to the surround channels when downmixing to one Lt/Rt output.
     *
     * @param DolbyDigitalPlusSurroundMixLevel $ltRtSurroundMixLevel
     * @return $this
     */
    public function ltRtSurroundMixLevel(DolbyDigitalPlusSurroundMixLevel $ltRtSurroundMixLevel)
    {
        $this->ltRtSurroundMixLevel = $ltRtSurroundMixLevel;

        return $this;
    }

    /**
     * preferredMode
     *
     * @param DolbyDigitalPlusDownmixingPreferredMode $preferredMode
     * @return $this
     */
    public function preferredMode(DolbyDigitalPlusDownmixingPreferredMode $preferredMode)
    {
        $this->preferredMode = $preferredMode;

        return $this;
    }
}

