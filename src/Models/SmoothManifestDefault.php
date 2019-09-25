<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SmoothManifestDefault extends SmoothStreamingManifest
{
    /** @var string */
    public $encodingId;

    /** @var SmoothManifestDefaultVersion */
    public $version;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->version = ObjectMapper::map($this->version, SmoothManifestDefaultVersion::class);
    }

    /**
     * The id of the encoding to create a default manifest from (required)
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
     * The version of the default manifest generator
     *
     * @param SmoothManifestDefaultVersion $version
     * @return $this
     */
    public function version(SmoothManifestDefaultVersion $version)
    {
        $this->version = $version;

        return $this;
    }
}

