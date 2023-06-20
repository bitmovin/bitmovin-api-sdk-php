<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class HlsManifestDefault extends HlsManifest
{
    /** @var string */
    public $encodingId;

    /** @var HlsManifestDefaultVersion */
    public $version;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->version = ObjectMapper::map($this->version, HlsManifestDefaultVersion::class);
    }

    /**
     * The id of the encoding to create a default manifest for (required)
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
     * Currently not in use
     *
     * @param HlsManifestDefaultVersion $version
     * @return $this
     */
    public function version(HlsManifestDefaultVersion $version)
    {
        $this->version = $version;

        return $this;
    }
}

