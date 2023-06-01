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
     * The id of the encoding to create a default manifest from. (required)
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
     * Specifies the algorithm that determines which output of the given encoding is included into the manifest. Note that this is not related to the \&quot;manifestGenerator\&quot; version of the \&quot;Start\&quot; request.
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

