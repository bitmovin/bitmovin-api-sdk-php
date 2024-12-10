<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PrewarmedEncoderPool extends BitmovinResource
{
    /** @var string */
    public $encoderVersion;

    /** @var CloudRegion */
    public $cloudRegion;

    /** @var string */
    public $infrastructureId;

    /** @var PrewarmedEncoderDiskSize */
    public $diskSize;

    /** @var int */
    public $targetPoolSize;

    /** @var bool */
    public $dynamicPool;

    /** @var bool */
    public $gpuEnabled;

    /** @var PrewarmedEncoderPoolStatus */
    public $status;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->cloudRegion = ObjectMapper::map($this->cloudRegion, CloudRegion::class);
        $this->diskSize = ObjectMapper::map($this->diskSize, PrewarmedEncoderDiskSize::class);
        $this->status = ObjectMapper::map($this->status, PrewarmedEncoderPoolStatus::class);
    }

    /**
     * The encoder version which the pool&#39;s instances will be running (required)
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
     * The cloud region in which the pool&#39;s instances will be running. Must be a specific region (e.g. not &#39;AUTO&#39;, &#39;GOOGLE&#39; or &#39;EUROPE&#39;) (required)
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
     * Define an external infrastructure to run the pool on.
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
     * Disk size of the prewarmed instances in GB. Needs to be chosen depending on input file sizes and encoding features used. (required)
     *
     * @param PrewarmedEncoderDiskSize $diskSize
     * @return $this
     */
    public function diskSize(PrewarmedEncoderDiskSize $diskSize)
    {
        $this->diskSize = $diskSize;

        return $this;
    }

    /**
     * Number of instances to keep prewarmed while the pool is running (required)
     *
     * @param int $targetPoolSize
     * @return $this
     */
    public function targetPoolSize(int $targetPoolSize)
    {
        $this->targetPoolSize = $targetPoolSize;

        return $this;
    }

    /**
     * Activate dynamic pool behaviour. Pool will increase/decrease based on usage up until a size of 10 instances. Minimum pool size is set by targetPoolSize
     *
     * @param bool $dynamicPool
     * @return $this
     */
    public function dynamicPool(bool $dynamicPool)
    {
        $this->dynamicPool = $dynamicPool;

        return $this;
    }

    /**
     * Create pool with GPU instances for hardware encoding presets (e.g., VOD_HARDWARE_SHORTFORM).
     *
     * @param bool $gpuEnabled
     * @return $this
     */
    public function gpuEnabled(bool $gpuEnabled)
    {
        $this->gpuEnabled = $gpuEnabled;

        return $this;
    }
}

