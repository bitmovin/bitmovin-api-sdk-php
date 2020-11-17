<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PrewarmedEncoderPool extends BitmovinResource
{
    /** @var string */
    public $encoderVersion;

    /** @var \BitmovinApiSdk\Models\CloudRegion */
    public $cloudRegion;

    /** @var string */
    public $infrastructureId;

    /** @var \BitmovinApiSdk\Models\PrewarmedEncoderDiskSize */
    public $diskSize;

    /** @var int */
    public $targetPoolSize;

    /** @var \BitmovinApiSdk\Models\PrewarmedEncoderPoolStatus */
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
     * cloudRegion
     *
     * @param \BitmovinApiSdk\Models\CloudRegion $cloudRegion
     * @return $this
     */
    public function cloudRegion(\BitmovinApiSdk\Models\CloudRegion $cloudRegion)
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
     * diskSize
     *
     * @param \BitmovinApiSdk\Models\PrewarmedEncoderDiskSize $diskSize
     * @return $this
     */
    public function diskSize(\BitmovinApiSdk\Models\PrewarmedEncoderDiskSize $diskSize)
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
     * status
     *
     * @param \BitmovinApiSdk\Models\PrewarmedEncoderPoolStatus $status
     * @return $this
     */
    public function status(\BitmovinApiSdk\Models\PrewarmedEncoderPoolStatus $status)
    {
        $this->status = $status;

        return $this;
    }
}

