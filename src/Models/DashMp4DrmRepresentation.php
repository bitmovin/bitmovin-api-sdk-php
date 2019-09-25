<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashMp4DrmRepresentation extends DashMp4Representation
{
    /** @var string */
    public $drmId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * DRM Id (required)
     *
     * @param string $drmId
     * @return $this
     */
    public function drmId(string $drmId)
    {
        $this->drmId = $drmId;

        return $this;
    }
}

