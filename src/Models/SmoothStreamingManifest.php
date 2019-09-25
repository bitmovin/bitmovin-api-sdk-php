<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SmoothStreamingManifest extends Manifest
{
    /** @var string */
    public $serverManifestName;

    /** @var string */
    public $clientManifestName;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Filename of the server manifest
     *
     * @param string $serverManifestName
     * @return $this
     */
    public function serverManifestName(string $serverManifestName)
    {
        $this->serverManifestName = $serverManifestName;

        return $this;
    }

    /**
     * Filename of the client manifest
     *
     * @param string $clientManifestName
     * @return $this
     */
    public function clientManifestName(string $clientManifestName)
    {
        $this->clientManifestName = $clientManifestName;

        return $this;
    }
}

