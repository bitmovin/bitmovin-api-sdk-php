<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BurnInSubtitleDvbSub extends BitmovinResource
{
    /** @var string */
    public $inputStreamId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Id of an IngestInputStream which specifies the stream of the DVB-SUB subtitles (required)
     *
     * @param string $inputStreamId
     * @return $this
     */
    public function inputStreamId(string $inputStreamId)
    {
        $this->inputStreamId = $inputStreamId;

        return $this;
    }
}

