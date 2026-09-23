<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AiSceneAnalysisLiveResult extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $analysisId;

    /** @var string */
    public $encodingId;

    /** @var int */
    public $sequence;

    /** @var Carbon */
    public $producedAt;

    /** @var bool */
    public $isFinal;

    /** @var float */
    public $analyzedStartTimeSeconds;

    /** @var float */
    public $analyzedEndTimeSeconds;

    /** @var \BitmovinApiSdk\Models\AiSceneAnalysisLiveSourceGap[] */
    public $sourceGaps;

    /** @var AiSceneAnalysisLiveResultMetadata */
    public $metadata;

    /** @var \BitmovinApiSdk\Models\AiSceneAnalysisLiveObservation[] */
    public $observations;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->producedAt = ObjectMapper::map($this->producedAt, Carbon::class);
        $this->sourceGaps = ObjectMapper::map($this->sourceGaps, AiSceneAnalysisLiveSourceGap::class);
        $this->metadata = ObjectMapper::map($this->metadata, AiSceneAnalysisLiveResultMetadata::class);
        $this->observations = ObjectMapper::map($this->observations, AiSceneAnalysisLiveObservation::class);
    }

    /**
     * ID of the Live Analysis resource (required)
     *
     * @param string $analysisId
     * @return $this
     */
    public function analysisId(string $analysisId)
    {
        $this->analysisId = $analysisId;

        return $this;
    }

    /**
     * ID of the Encoding associated with the Analysis (required)
     *
     * @param string $encodingId
     * @return $this
     */
    public function encodingId(string $encodingId)
    {
        $this->encodingId = $encodingId;

        return $this;
    }

    /**
     * Monotonically increasing generation sequence, starting at 1 (required)
     *
     * @param int $sequence
     * @return $this
     */
    public function sequence(int $sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Time at which the AI analysis produced this result generation (required)
     *
     * @param Carbon $producedAt
     * @return $this
     */
    public function producedAt(Carbon $producedAt)
    {
        $this->producedAt = $producedAt;

        return $this;
    }

    /**
     * Whether AI analysis produced this as the final result generation. This does not by itself imply that the Analysis completed successfully. (required)
     *
     * @param bool $isFinal
     * @return $this
     */
    public function isFinal(bool $isFinal)
    {
        $this->isFinal = $isFinal;

        return $this;
    }

    /**
     * Start of cumulative analyzed coverage on the monotonic analysis timeline (required)
     *
     * @param float $analyzedStartTimeSeconds
     * @return $this
     */
    public function analyzedStartTimeSeconds(float $analyzedStartTimeSeconds)
    {
        $this->analyzedStartTimeSeconds = $analyzedStartTimeSeconds;

        return $this;
    }

    /**
     * End of cumulative analyzed coverage on the monotonic analysis timeline (required)
     *
     * @param float $analyzedEndTimeSeconds
     * @return $this
     */
    public function analyzedEndTimeSeconds(float $analyzedEndTimeSeconds)
    {
        $this->analyzedEndTimeSeconds = $analyzedEndTimeSeconds;

        return $this;
    }

    /**
     * Cumulative closed source gaps on the monotonic analysis timeline (required)
     *
     * @param \BitmovinApiSdk\Models\AiSceneAnalysisLiveSourceGap[] $sourceGaps
     * @return $this
     */
    public function sourceGaps(array $sourceGaps)
    {
        $this->sourceGaps = $sourceGaps;

        return $this;
    }

    /**
     * Producer metadata for this generation (required)
     *
     * @param AiSceneAnalysisLiveResultMetadata $metadata
     * @return $this
     */
    public function metadata(AiSceneAnalysisLiveResultMetadata $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Cumulative immutable observations. Existing observations retain the same ID and content across later generations. Each time range identifies the analyzed media window that produced the observation, not an exact event location. (required)
     *
     * @param \BitmovinApiSdk\Models\AiSceneAnalysisLiveObservation[] $observations
     * @return $this
     */
    public function observations(array $observations)
    {
        $this->observations = $observations;

        return $this;
    }
}

