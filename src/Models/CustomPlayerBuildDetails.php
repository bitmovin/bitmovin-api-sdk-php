<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CustomPlayerBuildDetails extends BitmovinResource
{
    /** @var string */
    public $playerVersion;

    /** @var string[] */
    public $domains;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The player version that should be used for the custom player build. If not set the &#39;latest&#39; version is used. (required)
     *
     * @param string $playerVersion
     * @return $this
     */
    public function playerVersion(string $playerVersion)
    {
        $this->playerVersion = $playerVersion;

        return $this;
    }

    /**
     * The domains that the player is locked to. If not set the player will only work with &#39;localhost&#39;. Not more than 49 additional domains can be added. (required)
     *
     * @param string[] $domains
     * @return $this
     */
    public function domains(array $domains)
    {
        $this->domains = $domains;

        return $this;
    }
}

