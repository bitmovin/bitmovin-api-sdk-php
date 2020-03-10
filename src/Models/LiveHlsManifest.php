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

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * HLS manifest ids (required)
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
     * Timeshift in seconds
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
}

