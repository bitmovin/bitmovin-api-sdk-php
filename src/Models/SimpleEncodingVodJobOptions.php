<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobOptions extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var bool */
    public $singleFileOutput;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Defines if the job should additionally produce a single file as output (e.g., an MP4) for every rendition the Per-Title algorithm produces. This can be useful to provide customers with features such as downloading of videos for different screen sizes.  The single file contains both audio and video streams along the segmented output. Note that currently we do not include subtitles in this file.
     *
     * @param bool $singleFileOutput
     * @return $this
     */
    public function singleFileOutput(bool $singleFileOutput)
    {
        $this->singleFileOutput = $singleFileOutput;

        return $this;
    }
}

