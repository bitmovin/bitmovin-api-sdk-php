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
     * Different modes for syncing the start and end of audio input streams with the video inputs. This feature does not work with Dolby Digital (Plus) or Dolby Atmos.
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

