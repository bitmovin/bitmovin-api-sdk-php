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

    /** @var DashManifestAdMarkerSettings */
    public $adMarkerSettings;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->availabilityStartTimeMode = ObjectMapper::map($this->availabilityStartTimeMode, AvailabilityStartTimeMode::class);
        $this->adMarkerSettings = ObjectMapper::map($this->adMarkerSettings, DashManifestAdMarkerSettings::class);
    }

    /**
     * Dash manifest id (required)
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
     * Live edge offset in seconds. How it is applied depends on the type of the segmented representations in the manifest. For &#x60;TIMELINE&#x60; representations, new segments are held back for this duration (rounded up to whole segments) before they are added to the SegmentTimeline, and are always added in order. This adds the same amount of latency, but a segment that arrives late by up to this duration does not interrupt the manifest. A segment that arrives later than that stops the SegmentTimeline from updating until it arrives. If it does not arrive at all, a placeholder segment is added in its place once a few newer segments are available. If set to 0, segments are added as soon as they are available, still in order. For &#x60;TEMPLATE&#x60; representations, the &#x60;availabilityStartTime&#x60; is set this many seconds later, so players request each segment this much later. Late segments do not change the manifest; a player that requests a segment before it is uploaded gets an error. Segments are also kept in the manifest for this duration on top of the timeshift. We recommend a value of at least 2 segment durations.
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

    /**
     * adMarkerSettings
     *
     * @param DashManifestAdMarkerSettings $adMarkerSettings
     * @return $this
     */
    public function adMarkerSettings(DashManifestAdMarkerSettings $adMarkerSettings)
    {
        $this->adMarkerSettings = $adMarkerSettings;

        return $this;
    }
}

