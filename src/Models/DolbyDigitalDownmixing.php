<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyDigitalDownmixing extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var DolbyDigitalCenterMixLevel */
    public $loRoCenterMixLevel;

    /** @var DolbyDigitalCenterMixLevel */
    public $ltRtCenterMixLevel;

    /** @var DolbyDigitalSurroundMixLevel */
    public $loRoSurroundMixLevel;

    /** @var DolbyDigitalSurroundMixLevel */
    public $ltRtSurroundMixLevel;

    /** @var DolbyDigitalDownmixingPreferredMode */
    public $preferredMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->loRoCenterMixLevel = ObjectMapper::map($this->loRoCenterMixLevel, DolbyDigitalCenterMixLevel::class);
        $this->ltRtCenterMixLevel = ObjectMapper::map($this->ltRtCenterMixLevel, DolbyDigitalCenterMixLevel::class);
        $this->loRoSurroundMixLevel = ObjectMapper::map($this->loRoSurroundMixLevel, DolbyDigitalSurroundMixLevel::class);
        $this->ltRtSurroundMixLevel = ObjectMapper::map($this->ltRtSurroundMixLevel, DolbyDigitalSurroundMixLevel::class);
        $this->preferredMode = ObjectMapper::map($this->preferredMode, DolbyDigitalDownmixingPreferredMode::class);
    }

    /**
     * The level shift applied to the C channel when adding to the L and R outputs as a result of downmixing to one Lo/Ro output.
     *
     * @param DolbyDigitalCenterMixLevel $loRoCenterMixLevel
     * @return $this
     */
    public function loRoCenterMixLevel(DolbyDigitalCenterMixLevel $loRoCenterMixLevel)
    {
        $this->loRoCenterMixLevel = $loRoCenterMixLevel;

        return $this;
    }

    /**
     * The level shift applied to the C channel when adding to the L and R outputs as a result of downmixing to one Lt/Rt output.
     *
     * @param DolbyDigitalCenterMixLevel $ltRtCenterMixLevel
     * @return $this
     */
    public function ltRtCenterMixLevel(DolbyDigitalCenterMixLevel $ltRtCenterMixLevel)
    {
        $this->ltRtCenterMixLevel = $ltRtCenterMixLevel;

        return $this;
    }

    /**
     * The level shift applied to the surround channels when downmixing to one Lo/Ro output.
     *
     * @param DolbyDigitalSurroundMixLevel $loRoSurroundMixLevel
     * @return $this
     */
    public function loRoSurroundMixLevel(DolbyDigitalSurroundMixLevel $loRoSurroundMixLevel)
    {
        $this->loRoSurroundMixLevel = $loRoSurroundMixLevel;

        return $this;
    }

    /**
     * The level shift applied to the surround channels when downmixing to one Lt/Rt output.
     *
     * @param DolbyDigitalSurroundMixLevel $ltRtSurroundMixLevel
     * @return $this
     */
    public function ltRtSurroundMixLevel(DolbyDigitalSurroundMixLevel $ltRtSurroundMixLevel)
    {
        $this->ltRtSurroundMixLevel = $ltRtSurroundMixLevel;

        return $this;
    }

    /**
     * preferredMode
     *
     * @param DolbyDigitalDownmixingPreferredMode $preferredMode
     * @return $this
     */
    public function preferredMode(DolbyDigitalDownmixingPreferredMode $preferredMode)
    {
        $this->preferredMode = $preferredMode;

        return $this;
    }
}

