<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Encoding extends BitmovinResource
{
    /** @var CloudRegion */
    public $cloudRegion;

    /** @var \BitmovinApiSdk\Models\CloudRegion[] */
    public $fallbackCloudRegions;

    /** @var string */
    public $encoderVersion;

    /** @var string */
    public $infrastructureId;

    /** @var InfrastructureSettings */
    public $infrastructure;

    /** @var string */
    public $selectedEncoderVersion;

    /** @var EncodingMode */
    public $selectedEncodingMode;

    /** @var CloudRegion */
    public $selectedCloudRegion;

    /** @var Status */
    public $status;

    /** @var string[] */
    public $labels;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->cloudRegion = ObjectMapper::map($this->cloudRegion, CloudRegion::class);
        $this->fallbackCloudRegions = ObjectMapper::map($this->fallbackCloudRegions, CloudRegion::class);
        $this->infrastructure = ObjectMapper::map($this->infrastructure, InfrastructureSettings::class);
        $this->selectedEncodingMode = ObjectMapper::map($this->selectedEncodingMode, EncodingMode::class);
        $this->selectedCloudRegion = ObjectMapper::map($this->selectedCloudRegion, CloudRegion::class);
        $this->status = ObjectMapper::map($this->status, Status::class);
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
     * Define an external infrastructure to run the encoding on. Note If you set this value, the &#x60;cloudRegion&#x60; must be &#39;EXTERNAL&#39;.
     *
     * @param string $infrastructureId
     * @return $this
     */
    public function infrastructureId(string $infrastructureId)
    {
        $this->infrastructureId = $infrastructureId;

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

