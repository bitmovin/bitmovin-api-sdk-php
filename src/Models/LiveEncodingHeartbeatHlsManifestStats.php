<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatHlsManifestStats extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $manifestId;

    /** @var LiveEncodingHeartbeatManifestUpdateLatencyStats */
    public $manifestUpdateLatencyStats;

    /** @var \BitmovinApiSdk\Models\LiveEncodingHeartbeatManifestUpdate[] */
    public $manifestUpdates;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->manifestUpdateLatencyStats = ObjectMapper::map($this->manifestUpdateLatencyStats, LiveEncodingHeartbeatManifestUpdateLatencyStats::class);
        $this->manifestUpdates = ObjectMapper::map($this->manifestUpdates, LiveEncodingHeartbeatManifestUpdate::class);
    }

    /**
     * Id of the HLS manifest these statistics belong to.
     *
     * @param string $manifestId
     * @return $this
     */
    public function manifestId(string $manifestId)
    {
        $this->manifestId = $manifestId;

        return $this;
    }

    /**
     * Aggregate latency statistics over recorded manifest updates.
     *
     * @param LiveEncodingHeartbeatManifestUpdateLatencyStats $manifestUpdateLatencyStats
     * @return $this
     */
    public function manifestUpdateLatencyStats(LiveEncodingHeartbeatManifestUpdateLatencyStats $manifestUpdateLatencyStats)
    {
        $this->manifestUpdateLatencyStats = $manifestUpdateLatencyStats;

        return $this;
    }

    /**
     * Per-manifest outlier-only (high-latency) manifest updates, ordered newest to oldest.
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingHeartbeatManifestUpdate[] $manifestUpdates
     * @return $this
     */
    public function manifestUpdates(array $manifestUpdates)
    {
        $this->manifestUpdates = $manifestUpdates;

        return $this;
    }
}

