<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SmoothManifestContentProtection extends BitmovinResource
{
    /** @var string */
    public $encodingId;

    /** @var string */
    public $muxingId;

    /** @var string */
    public $drmId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Id of the encoding. (required)
     *
     * @param string $encodingId
     * @return $this
     */
    public function encodingId(string $encodingId)
    {
        $this->encodingId = $encodingId;

        return $this;
    }

    /**
     * Id of the muxing. (required)
     *
     * @param string $muxingId
     * @return $this
     */
    public function muxingId(string $muxingId)
    {
        $this->muxingId = $muxingId;

        return $this;
    }

    /**
     * Id of the drm. (required)
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

