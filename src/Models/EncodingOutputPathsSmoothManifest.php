<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingOutputPathsSmoothManifest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $clientManifestPath;

    /** @var string */
    public $serverManifestPath;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Id of the Smooth manifest
     *
     * @param string $id
     * @return $this
     */
    public function id(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Path to the client manifest of the Smooth manifest on the given output
     *
     * @param string $clientManifestPath
     * @return $this
     */
    public function clientManifestPath(string $clientManifestPath)
    {
        $this->clientManifestPath = $clientManifestPath;

        return $this;
    }

    /**
     * Path to the server manifest of the Smooth manifest on the given output
     *
     * @param string $serverManifestPath
     * @return $this
     */
    public function serverManifestPath(string $serverManifestPath)
    {
        $this->serverManifestPath = $serverManifestPath;

        return $this;
    }
}

