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
     * Live edge offset in seconds
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

