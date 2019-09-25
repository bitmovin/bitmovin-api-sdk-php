<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class IFramePlaylist extends BitmovinResource
{
    /** @var string */
    public $filename;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * The filename of your I-frame playlist (required)
     *
     * @param string $filename
     * @return $this
     */
    public function filename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }
}

