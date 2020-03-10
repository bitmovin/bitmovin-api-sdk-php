<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamPerTitleSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var StreamPerTitleFixedResolutionAndBitrateSettings */
    public $fixedResolutionAndBitrateSettings;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->fixedResolutionAndBitrateSettings = ObjectMapper::map($this->fixedResolutionAndBitrateSettings, StreamPerTitleFixedResolutionAndBitrateSettings::class);
    }

    /**
     * Settings for PER_TITLE_TEMPLATE_FIXED_RESOLUTION_AND_BITRATE mode
     *
     * @param StreamPerTitleFixedResolutionAndBitrateSettings $fixedResolutionAndBitrateSettings
     * @return $this
     */
    public function fixedResolutionAndBitrateSettings(StreamPerTitleFixedResolutionAndBitrateSettings $fixedResolutionAndBitrateSettings)
    {
        $this->fixedResolutionAndBitrateSettings = $fixedResolutionAndBitrateSettings;

        return $this;
    }
}

