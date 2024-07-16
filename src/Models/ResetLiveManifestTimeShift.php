<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ResetLiveManifestTimeShift extends BitmovinResponse
{
    /** @var float */
    public $residualPeriodInSeconds;

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

