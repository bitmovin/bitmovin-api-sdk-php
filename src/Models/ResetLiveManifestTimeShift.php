<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ResetLiveManifestTimeShift extends BitmovinResponse
{
    /** @var float */
    public $residualPeriodInSeconds;

    /** @var float */
    public $offsetInSeconds;

    /** @var string[] */
    public $manifestIds;

    /** @var bool */
    public $shiftProgressiveMuxingStartPosition;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Determines how many seconds will be left in the manifest after segments are removed. If this is not set, all but one segment will be removed.
     *
     * @param float $residualPeriodInSeconds
     * @return $this
     */
    public function residualPeriodInSeconds(float $residualPeriodInSeconds)
    {
        $this->residualPeriodInSeconds = $residualPeriodInSeconds;

        return $this;
    }

    /**
     * Offset in seconds from the start of the live event, defining the point from which all segments within that duration will be removed from the given manifests. E.g.: The segment length is 2 seconds and a timeshift of 120 seconds (2 minutes) is configured.  The manifest contains 60 segments with the last segment number being 80 (&#x60;segment_80.ts&#x60;).  This means the manifest contains &#x60;segment_20.ts&#x60; to &#x60;segment_80.ts&#x60; (timeshift of 2 minutes equals 60 segments in manifest) If you set &#x60;offsetInSeconds&#x60; to &#x60;120&#x60;, all segments below segment number 60 (&#x60;segment_60.ts&#x60;) will be removed. (&#x60;targetSegmentNumber &#x3D; offsetInSeconds / segmentLength&#x60;) The manifests will then contain &#x60;segment_60.ts&#x60; to &#x60;segment_80.ts&#x60; *Note:* Only &#x60;offsetInSeconds&#x60; or &#x60;residualPeriodInSeconds&#x60; can be set.
     *
     * @param float $offsetInSeconds
     * @return $this
     */
    public function offsetInSeconds(float $offsetInSeconds)
    {
        $this->offsetInSeconds = $offsetInSeconds;

        return $this;
    }

    /**
     * The ids of the manifests to update. If this property is not set, all manifests tied to the encoding are updated.
     *
     * @param string[] $manifestIds
     * @return $this
     */
    public function manifestIds(array $manifestIds)
    {
        $this->manifestIds = $manifestIds;

        return $this;
    }

    /**
     * If set to true, the Progressive muxing start position will be shifted to the start of the first remaining segment after the removal.  NOTE: This only works for Progressive MP4 muxings.
     *
     * @param bool $shiftProgressiveMuxingStartPosition
     * @return $this
     */
    public function shiftProgressiveMuxingStartPosition(bool $shiftProgressiveMuxingStartPosition)
    {
        $this->shiftProgressiveMuxingStartPosition = $shiftProgressiveMuxingStartPosition;

        return $this;
    }
}

