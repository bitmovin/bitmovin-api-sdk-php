<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Encoding extends BitmovinResource
{
    /** @var EncodingType */
    public $type;

    /** @var Carbon */
    public $startedAt;

    /** @var Carbon */
    public $queuedAt;

    /** @var Carbon */
    public $runningAt;

    /** @var Carbon */
    public $finishedAt;

    /** @var Carbon */
    public $errorAt;

    /** @var int */
    public $progress;

    /** @var CloudRegion */
    public $cloudRegion;

    /** @var \BitmovinApiSdk\Models\CloudRegion[] */
    public $fallbackCloudRegions;

    /** @var string */
    public $encoderVersion;

    /** @var InfrastructureSettings */
    public $infrastructure;

    /** @var string */
    public $staticIpId;

    /** @var string */
    public $selectedEncoderVersion;

    /** @var EncodingMode */
    public $selectedEncodingMode;

    /** @var CloudRegion */
    public $selectedCloudRegion;

    /** @var \BitmovinApiSdk\Models\CloudRegion[] */
    public $selectedFallbackCloudRegions;

    /** @var Status */
    public $status;

    /** @var string[] */
    public $labels;

    /** @var LiveOptionsType */
    public $liveOptionsType;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, EncodingType::class);
        $this->startedAt = ObjectMapper::map($this->startedAt, Carbon::class);
        $this->queuedAt = ObjectMapper::map($this->queuedAt, Carbon::class);
        $this->runningAt = ObjectMapper::map($this->runningAt, Carbon::class);
        $this->finishedAt = ObjectMapper::map($this->finishedAt, Carbon::class);
        $this->errorAt = ObjectMapper::map($this->errorAt, Carbon::class);
        $this->cloudRegion = ObjectMapper::map($this->cloudRegion, CloudRegion::class);
        $this->fallbackCloudRegions = ObjectMapper::map($this->fallbackCloudRegions, CloudRegion::class);
        $this->infrastructure = ObjectMapper::map($this->infrastructure, InfrastructureSettings::class);
        $this->selectedEncodingMode = ObjectMapper::map($this->selectedEncodingMode, EncodingMode::class);
        $this->selectedCloudRegion = ObjectMapper::map($this->selectedCloudRegion, CloudRegion::class);
        $this->selectedFallbackCloudRegions = ObjectMapper::map($this->selectedFallbackCloudRegions, CloudRegion::class);
        $this->status = ObjectMapper::map($this->status, Status::class);
        $this->liveOptionsType = ObjectMapper::map($this->liveOptionsType, LiveOptionsType::class);
    }

    /**
     * cloudRegion
     *
     * @param CloudRegion $cloudRegion
     * @return $this
     */
    public function cloudRegion(CloudRegion $cloudRegion)
    {
        $this->cloudRegion = $cloudRegion;

        return $this;
    }

    /**
     * Specify a list of regions which are used in case the preferred region is down. Currently there are several restrictions. - The region has to be specific or AUTO - The region has to be for the same cloud provider as the default one - You can only configure at most 3 fallback regions
     *
     * @param \BitmovinApiSdk\Models\CloudRegion[] $fallbackCloudRegions
     * @return $this
     */
    public function fallbackCloudRegions(array $fallbackCloudRegions)
    {
        $this->fallbackCloudRegions = $fallbackCloudRegions;

        return $this;
    }

    /**
     * Version of the encoder
     *
     * @param string $encoderVersion
     * @return $this
     */
    public function encoderVersion(string $encoderVersion)
    {
        $this->encoderVersion = $encoderVersion;

        return $this;
    }

    /**
     * infrastructure
     *
     * @param InfrastructureSettings $infrastructure
     * @return $this
     */
    public function infrastructure(InfrastructureSettings $infrastructure)
    {
        $this->infrastructure = $infrastructure;

        return $this;
    }

    /**
     * Specify an ID of a Static IP infrastructure resource this encoding should use. A Static IP cannot be used by multiple encodings at once. The encoding will go to an error state if the Static IP is already in use. This is currently only supported for live encodings.
     *
     * @param string $staticIpId
     * @return $this
     */
    public function staticIpId(string $staticIpId)
    {
        $this->staticIpId = $staticIpId;

        return $this;
    }

    /**
     * You may pass a list of groups associated with this encoding. This will enable you to group results in the statistics resource
     *
     * @param string[] $labels
     * @return $this
     */
    public function labels(array $labels)
    {
        $this->labels = $labels;

        return $this;
    }
}

