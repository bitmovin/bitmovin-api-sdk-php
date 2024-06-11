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
}

