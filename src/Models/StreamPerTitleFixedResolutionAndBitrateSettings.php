<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamPerTitleFixedResolutionAndBitrateSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $minBitrate;

    /** @var int */
    public $maxBitrate;

    /** @var BitrateSelectionMode */
    public $bitrateSelectionMode;

    /** @var int */
    public $lowComplexityBoundaryForMaxBitrate;

    /** @var int */
    public $highComplexityBoundaryForMaxBitrate;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->bitrateSelectionMode = ObjectMapper::map($this->bitrateSelectionMode, BitrateSelectionMode::class);
    }

    /**
     * The minimum bitrate that will be used for that template.
     *
     * @param int $minBitrate
     * @return $this
     */
    public function minBitrate(int $minBitrate)
    {
        $this->minBitrate = $minBitrate;

        return $this;
    }

    /**
     * The maximum bitrate that will be used for that template.
     *
     * @param int $maxBitrate
     * @return $this
     */
    public function maxBitrate(int $maxBitrate)
    {
        $this->maxBitrate = $maxBitrate;

        return $this;
    }

    /**
     * Bitrate selection mode
     *
     * @param BitrateSelectionMode $bitrateSelectionMode
     * @return $this
     */
    public function bitrateSelectionMode(BitrateSelectionMode $bitrateSelectionMode)
    {
        $this->bitrateSelectionMode = $bitrateSelectionMode;

        return $this;
    }

    /**
     * Low complexity boundary for max bitrate
     *
     * @param int $lowComplexityBoundaryForMaxBitrate
     * @return $this
     */
    public function lowComplexityBoundaryForMaxBitrate(int $lowComplexityBoundaryForMaxBitrate)
    {
        $this->lowComplexityBoundaryForMaxBitrate = $lowComplexityBoundaryForMaxBitrate;

        return $this;
    }

    /**
     * High complexity boundary for max bitrate
     *
     * @param int $highComplexityBoundaryForMaxBitrate
     * @return $this
     */
    public function highComplexityBoundaryForMaxBitrate(int $highComplexityBoundaryForMaxBitrate)
    {
        $this->highComplexityBoundaryForMaxBitrate = $highComplexityBoundaryForMaxBitrate;

        return $this;
    }
}

