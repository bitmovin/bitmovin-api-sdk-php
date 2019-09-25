<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WebVttSidecarFile extends SidecarFile
{
    /** @var \BitmovinApiSdk\Models\WebVttSidecarFileSegmentation */
    public $segmentation;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->segmentation = ObjectMapper::map($this->segmentation, WebVttSidecarFileSegmentation::class);
    }

    /**
     * segmentation
     *
     * @param \BitmovinApiSdk\Models\WebVttSidecarFileSegmentation $segmentation
     * @return $this
     */
    public function segmentation(\BitmovinApiSdk\Models\WebVttSidecarFileSegmentation $segmentation)
    {
        $this->segmentation = $segmentation;

        return $this;
    }
}

