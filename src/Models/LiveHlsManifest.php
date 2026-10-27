<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveHlsManifest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $manifestId;

    /** @var float */
    public $timeshift;

    /** @var float */
    public $liveEdgeOffset;

    /** @var bool */
    public $insertProgramDateTime;

    /** @var ProgramDateTimeSettings */
    public $programDateTimeSettings;

    /** @var HlsManifestAdMarkerSettings */
    public $adMarkerSettings;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->programDateTimeSettings = ObjectMapper::map($this->programDateTimeSettings, ProgramDateTimeSettings::class);
        $this->adMarkerSettings = ObjectMapper::map($this->adMarkerSettings, HlsManifestAdMarkerSettings::class);
    }

    /**
     * HLS manifest id (required)
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
     * Timeshift in seconds. We recommend to use a timeshift value not greater than 3 hours (10800.0 seconds). Longer values could negatively impact the manifest update frequency.
     *
     * @param float $timeshift
     * @return $this
     */
    public function timeshift(float $timeshift)
    {
        $this->timeshift = $timeshift;

        return $this;
    }

    /**
     * Live edge offset in seconds. New segments are held back for this duration (rounded up to whole segments) before they are added to the HLS playlist, and are always added in order. This adds the same amount of latency, but a segment that arrives late by up to this duration does not interrupt the playlist. A segment that arrives later than that stops the playlist from updating until it arrives. If it does not arrive at all, a placeholder segment is added in its place once a few newer segments are available. If set to 0, segments are added as soon as they are available. A late segment is then skipped and inserted into the playlist later, which can make players skip or repeat content. We recommend a value of at least 2 segment durations.
     *
     * @param float $liveEdgeOffset
     * @return $this
     */
    public function liveEdgeOffset(float $liveEdgeOffset)
    {
        $this->liveEdgeOffset = $liveEdgeOffset;

        return $this;
    }

    /**
     * Specifies if the EXT-X-PROGRAM-DATETIME tag will be included
     *
     * @param bool $insertProgramDateTime
     * @return $this
     */
    public function insertProgramDateTime(bool $insertProgramDateTime)
    {
        $this->insertProgramDateTime = $insertProgramDateTime;

        return $this;
    }

    /**
     * Configuration for the EXT-X-PROGRAM-DATETIME tag
     *
     * @param ProgramDateTimeSettings $programDateTimeSettings
     * @return $this
     */
    public function programDateTimeSettings(ProgramDateTimeSettings $programDateTimeSettings)
    {
        $this->programDateTimeSettings = $programDateTimeSettings;

        return $this;
    }

    /**
     * Configuration for tags related to ad markers (e.g. Scte35)
     *
     * @param HlsManifestAdMarkerSettings $adMarkerSettings
     * @return $this
     */
    public function adMarkerSettings(HlsManifestAdMarkerSettings $adMarkerSettings)
    {
        $this->adMarkerSettings = $adMarkerSettings;

        return $this;
    }
}

