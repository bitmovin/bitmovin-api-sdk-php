<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Scte35Cue extends BitmovinResponse
{
    /** @var float */
    public $cueDuration;

    /** @var string[] */
    public $manifestIds;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Cue out duration in seconds. (required)
     *
     * @param float $cueDuration
     * @return $this
     */
    public function cueDuration(float $cueDuration)
    {
        $this->cueDuration = $cueDuration;

        return $this;
    }

    /**
     * The ids of the manifests to update. If this property is not set, all the manifests tied to the encoding are updated.
     *
     * @param string[] $manifestIds
     * @return $this
     */
    public function manifestIds(array $manifestIds)
    {
        $this->manifestIds = $manifestIds;

        return $this;
    }
}

