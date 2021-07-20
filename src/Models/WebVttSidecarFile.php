<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WebVttSidecarFile extends SidecarFile
{
    /** @var WebVttSidecarFileSegmentation */
    public $segmentation;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->segmentation = ObjectMapper::map($this->segmentation, WebVttSidecarFileSegmentation::class);
    }

    /**
     * segmentation
     *
     * @param WebVttSidecarFileSegmentation $segmentation
     * @return $this
     */
    public function segmentation(WebVttSidecarFileSegmentation $segmentation)
    {
        $this->segmentation = $segmentation;

        return $this;
    }
}

