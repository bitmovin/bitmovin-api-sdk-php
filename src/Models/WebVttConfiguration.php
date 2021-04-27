<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WebVttConfiguration extends SubtitleConfiguration
{
    /** @var bool */
    public $appendOptionalZeroHour;

    /** @var bool */
    public $ignoreRegion;

    /** @var WebVttCueIdentifierPolicy */
    public $cueIdentifierPolicy;

    /** @var WebVttStyling */
    public $styling;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->cueIdentifierPolicy = ObjectMapper::map($this->cueIdentifierPolicy, WebVttCueIdentifierPolicy::class);
        $this->styling = ObjectMapper::map($this->styling, WebVttStyling::class);
    }

    /**
     * If set to true, the hours section on webvtt timestamp values will explicitely have zeroes instead of being omitted for values where hours &#x3D; 0.
     *
     * @param bool $appendOptionalZeroHour
     * @return $this
     */
    public function appendOptionalZeroHour(bool $appendOptionalZeroHour)
    {
        $this->appendOptionalZeroHour = $appendOptionalZeroHour;

        return $this;
    }

    /**
     * If set to true, the region information of the resulting webvtt file will be omitted. Defaults to false.
     *
     * @param bool $ignoreRegion
     * @return $this
     */
    public function ignoreRegion(bool $ignoreRegion)
    {
        $this->ignoreRegion = $ignoreRegion;

        return $this;
    }

    /**
     * cueIdentifierPolicy
     *
     * @param WebVttCueIdentifierPolicy $cueIdentifierPolicy
     * @return $this
     */
    public function cueIdentifierPolicy(WebVttCueIdentifierPolicy $cueIdentifierPolicy)
    {
        $this->cueIdentifierPolicy = $cueIdentifierPolicy;

        return $this;
    }

    /**
     * styling
     *
     * @param WebVttStyling $styling
     * @return $this
     */
    public function styling(WebVttStyling $styling)
    {
        $this->styling = $styling;

        return $this;
    }
}

