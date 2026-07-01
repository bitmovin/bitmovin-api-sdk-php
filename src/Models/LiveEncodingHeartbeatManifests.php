<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatManifests extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\LiveEncodingHeartbeatHlsManifestStats[] */
    public $hls;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->hls = ObjectMapper::map($this->hls, LiveEncodingHeartbeatHlsManifestStats::class);
    }

    /**
     * Per-manifest HLS update statistics; one entry per HLS manifest.
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingHeartbeatHlsManifestStats[] $hls
     * @return $this
     */
    public function hls(array $hls)
    {
        $this->hls = $hls;

        return $this;
    }
}

