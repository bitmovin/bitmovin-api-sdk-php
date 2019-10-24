<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyVisionMuxingConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\DolbyVisionTrackSampleEntryName */
    public $trackSampleEntryName;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->trackSampleEntryName = ObjectMapper::map($this->trackSampleEntryName, DolbyVisionTrackSampleEntryName::class);
    }

    /**
     * trackSampleEntryName
     *
     * @param \BitmovinApiSdk\Models\DolbyVisionTrackSampleEntryName $trackSampleEntryName
     * @return $this
     */
    public function trackSampleEntryName(\BitmovinApiSdk\Models\DolbyVisionTrackSampleEntryName $trackSampleEntryName)
    {
        $this->trackSampleEntryName = $trackSampleEntryName;

        return $this;
    }
}

