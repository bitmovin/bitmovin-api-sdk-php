<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AzureSpeechToCaptionsFilter extends Filter
{
    /** @var AzureSpeechToCaptionsSettings */
    public $azureSpeechToCaptionsSettings;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->azureSpeechToCaptionsSettings = ObjectMapper::map($this->azureSpeechToCaptionsSettings, AzureSpeechToCaptionsSettings::class);
    }

    /**
     * azureSpeechToCaptionsSettings
     *
     * @param AzureSpeechToCaptionsSettings $azureSpeechToCaptionsSettings
     * @return $this
     */
    public function azureSpeechToCaptionsSettings(AzureSpeechToCaptionsSettings $azureSpeechToCaptionsSettings)
    {
        $this->azureSpeechToCaptionsSettings = $azureSpeechToCaptionsSettings;

        return $this;
    }
}

