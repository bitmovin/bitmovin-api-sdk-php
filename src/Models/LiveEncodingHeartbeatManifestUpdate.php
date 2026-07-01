<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatManifestUpdate extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $manifestUpdateWallClockTime;

    /** @var Carbon */
    public $latestMediaPresentationTime;

    /** @var int */
    public $manifestUpdateLatency;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->manifestUpdateWallClockTime = ObjectMapper::map($this->manifestUpdateWallClockTime, Carbon::class);
        $this->latestMediaPresentationTime = ObjectMapper::map($this->latestMediaPresentationTime, Carbon::class);
    }

    /**
     * Wall-clock time the media-advancing manifest update occured, returned as UTC in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $manifestUpdateWallClockTime
     * @return $this
     */
    public function manifestUpdateWallClockTime(Carbon $manifestUpdateWallClockTime)
    {
        $this->manifestUpdateWallClockTime = $manifestUpdateWallClockTime;

        return $this;
    }

    /**
     * Latest media presentation time across renditions (min of all playlists&#39; stream progress), returned as UTC in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $latestMediaPresentationTime
     * @return $this
     */
    public function latestMediaPresentationTime(Carbon $latestMediaPresentationTime)
    {
        $this->latestMediaPresentationTime = $latestMediaPresentationTime;

        return $this;
    }

    /**
     * Manifest update latency in milliseconds (elapsed wall-clock minus media-time advanced).
     *
     * @param int $manifestUpdateLatency
     * @return $this
     */
    public function manifestUpdateLatency(int $manifestUpdateLatency)
    {
        $this->manifestUpdateLatency = $manifestUpdateLatency;

        return $this;
    }
}

