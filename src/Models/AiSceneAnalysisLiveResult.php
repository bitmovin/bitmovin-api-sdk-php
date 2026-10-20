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

    /** @var int */
    public $mediaTimeOriginUnixMs;

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

    /** @var \BitmovinApiSdk\Models\AiSceneAnalysisLiveKeyMoment[] */
    public $keyMoments;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->producedAt = ObjectMapper::map($this->producedAt, Carbon::class);
        $this->sourceGaps = ObjectMapper::map($this->sourceGaps, AiSceneAnalysisLiveSourceGap::class);
        $this->metadata = ObjectMapper::map($this->metadata, AiSceneAnalysisLiveResultMetadata::class);
        $this->observations = ObjectMapper::map($this->observations, AiSceneAnalysisLiveObservation::class);
        $this->keyMoments = ObjectMapper::map($this->keyMoments, AiSceneAnalysisLiveKeyMoment::class);
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
     * Monotonically increasing result sequence, starting at 1 (required)
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
     * Time at which the AI analysis produced this result snapshot (required)
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
     * UTC presentation-clock time in Unix milliseconds corresponding to media time zero. This origin is fixed for the Live Analysis; coverage, observation, key-moment, and source-gap times remain relative to it. It is not the source capture time or result publication time. (required)
     *
     * @param int $mediaTimeOriginUnixMs
     * @return $this
     */
    public function mediaTimeOriginUnixMs(int $mediaTimeOriginUnixMs)
    {
        $this->mediaTimeOriginUnixMs = $mediaTimeOriginUnixMs;

        return $this;
    }

    /**
     * Whether this is the final result snapshot. This does not by itself imply that the Analysis completed successfully. (required)
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
     * Cumulative closed source gaps on the monotonic analysis timeline. An empty or omitted array means there are no closed source gaps in this snapshot, not that the previous collection is unchanged.
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
     * Metadata for this result snapshot (required)
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
     * Complete set of active observations for this result sequence. An empty or omitted array means there are no active observations in this snapshot, not that the previous collection is unchanged. Observations may be removed in later sequences. Observation IDs identify immutable observation content and are never reused. Each time range identifies the analyzed media window that produced the observation, not an exact event location.
     *
     * @param \BitmovinApiSdk\Models\AiSceneAnalysisLiveObservation[] $observations
     * @return $this
     */
    public function observations(array $observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Complete set of current key moments for this result sequence, ordered by ascending startInSeconds. Ordering of moments with equal start times is unspecified. An empty or omitted array means there are no current key moments in this snapshot, not that the previous collection is unchanged.  Moments may be refined or withdrawn in later result sequences until the final result. A refined moment retains its ID; a withdrawn moment is absent from subsequent snapshots and its ID is never reused. Consumers identify moments by ID and detect changes through lastUpdatedSequence, not array position. Changing array position alone or marking the result final does not change lastUpdatedSequence.  Every referenced observation is active in the same result snapshot. Moment references are updated or moments withdrawn when supporting observations are replaced or removed.
     *
     * @param \BitmovinApiSdk\Models\AiSceneAnalysisLiveKeyMoment[] $keyMoments
     * @return $this
     */
    public function keyMoments(array $keyMoments)
    {
        $this->keyMoments = $keyMoments;

        return $this;
    }
}

