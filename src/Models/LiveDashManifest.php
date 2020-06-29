<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveDashManifest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $manifestId;

    /** @var float */
    public $timeshift;

    /** @var float */
    public $liveEdgeOffset;

    /** @var float */
    public $suggestedPresentationDelay;

    /** @var float */
    public $minimumUpdatePeriod;

    /** @var AvailabilityStartTimeMode */
    public $availabilityStartTimeMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->availabilityStartTimeMode = ObjectMapper::map($this->availabilityStartTimeMode, AvailabilityStartTimeMode::class);
    }

    /**
     * Dash manifest ids (required)
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
     * The suggestedPresentationDelay to be set in the DASH manifest. If nothing is set, no value will be set.
     *
     * @param float $suggestedPresentationDelay
     * @return $this
     */
    public function suggestedPresentationDelay(float $suggestedPresentationDelay)
    {
        $this->suggestedPresentationDelay = $suggestedPresentationDelay;

        return $this;
    }

    /**
     * The minimumUpdatePeriod to be set in the DASH manifest. If nothing is set, the segment duration will be set.
     *
     * @param float $minimumUpdatePeriod
     * @return $this
     */
    public function minimumUpdatePeriod(float $minimumUpdatePeriod)
    {
        $this->minimumUpdatePeriod = $minimumUpdatePeriod;

        return $this;
    }

    /**
     * The mode to trigger the availabilityStartTime initialization.
     *
     * @param AvailabilityStartTimeMode $availabilityStartTimeMode
     * @return $this
     */
    public function availabilityStartTimeMode(AvailabilityStartTimeMode $availabilityStartTimeMode)
    {
        $this->availabilityStartTimeMode = $availabilityStartTimeMode;

        return $this;
    }
}

