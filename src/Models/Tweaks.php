<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Tweaks extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AudioVideoSyncMode */
    public $audioVideoSyncMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->audioVideoSyncMode = ObjectMapper::map($this->audioVideoSyncMode, AudioVideoSyncMode::class);
    }

    /**
     * Defines special audio video sync handling
     *
     * @param AudioVideoSyncMode $audioVideoSyncMode
     * @return $this
     */
    public function audioVideoSyncMode(AudioVideoSyncMode $audioVideoSyncMode)
    {
        $this->audioVideoSyncMode = $audioVideoSyncMode;

        return $this;
    }
}

