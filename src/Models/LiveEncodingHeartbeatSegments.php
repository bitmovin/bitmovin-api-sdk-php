<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatSegments extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var LiveEncodingHeartbeatTotalProcessingStatsMs */
    public $totalProcessingStatsMs;

    /** @var \BitmovinApiSdk\Models\LiveEncodingHeartbeatUploadOutlier[] */
    public $uploadOutliers;

    /** @var \BitmovinApiSdk\Models\LiveEncodingHeartbeatTotalProcessingOutlier[] */
    public $totalProcessingOutliers;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->totalProcessingStatsMs = ObjectMapper::map($this->totalProcessingStatsMs, LiveEncodingHeartbeatTotalProcessingStatsMs::class);
        $this->uploadOutliers = ObjectMapper::map($this->uploadOutliers, LiveEncodingHeartbeatUploadOutlier::class);
        $this->totalProcessingOutliers = ObjectMapper::map($this->totalProcessingOutliers, LiveEncodingHeartbeatTotalProcessingOutlier::class);
    }

    /**
     * Aggregate statistics of per-segment total processing duration.
     *
     * @param LiveEncodingHeartbeatTotalProcessingStatsMs $totalProcessingStatsMs
     * @return $this
     */
    public function totalProcessingStatsMs(LiveEncodingHeartbeatTotalProcessingStatsMs $totalProcessingStatsMs)
    {
        $this->totalProcessingStatsMs = $totalProcessingStatsMs;

        return $this;
    }

    /**
     * Last 20 per-muxing uploads whose duration exceeded the upload-outlier threshold.
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingHeartbeatUploadOutlier[] $uploadOutliers
     * @return $this
     */
    public function uploadOutliers(array $uploadOutliers)
    {
        $this->uploadOutliers = $uploadOutliers;

        return $this;
    }

    /**
     * Last 20 segments whose total processing duration exceeded twice the rolling median.
     *
     * @param \BitmovinApiSdk\Models\LiveEncodingHeartbeatTotalProcessingOutlier[] $totalProcessingOutliers
     * @return $this
     */
    public function totalProcessingOutliers(array $totalProcessingOutliers)
    {
        $this->totalProcessingOutliers = $totalProcessingOutliers;

        return $this;
    }
}

