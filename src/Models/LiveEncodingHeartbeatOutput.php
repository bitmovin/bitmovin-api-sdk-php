<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatOutput extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var LiveEncodingHeartbeatManifests */
    public $manifests;

    /** @var LiveEncodingHeartbeatSegments */
    public $segments;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->manifests = ObjectMapper::map($this->manifests, LiveEncodingHeartbeatManifests::class);
        $this->segments = ObjectMapper::map($this->segments, LiveEncodingHeartbeatSegments::class);
    }

    /**
     * Manifest statistics for the live encoding output.
     *
     * @param LiveEncodingHeartbeatManifests $manifests
     * @return $this
     */
    public function manifests(LiveEncodingHeartbeatManifests $manifests)
    {
        $this->manifests = $manifests;

        return $this;
    }

    /**
     * Segment processing statistics for the live encoding output.
     *
     * @param LiveEncodingHeartbeatSegments $segments
     * @return $this
     */
    public function segments(LiveEncodingHeartbeatSegments $segments)
    {
        $this->segments = $segments;

        return $this;
    }
}

