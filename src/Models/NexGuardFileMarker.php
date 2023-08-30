<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class NexGuardFileMarker extends BitmovinResource
{
    /** @var string */
    public $license;

    /** @var NexGuardWatermarkingType */
    public $watermarkType;

    /** @var int */
    public $payload;

    /** @var string */
    public $preset;

    /** @var NexGuardWatermarkingStrength */
    public $strength;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->watermarkType = ObjectMapper::map($this->watermarkType, NexGuardWatermarkingType::class);
        $this->strength = ObjectMapper::map($this->strength, NexGuardWatermarkingStrength::class);
    }

    /**
     * Use the base64 license string that Nagra provides you. (required)
     *
     * @param string $license
     * @return $this
     */
    public function license(string $license)
    {
        $this->license = $license;

        return $this;
    }

    /**
     * The type of watermarking to be used: * &#x60;OTT&#x60; - A/B watermarking (for video streams only) * &#x60;DUPLICATED&#x60; - Stream duplication to match A/B video streams in CDN delivery (for audio streams only)
     *
     * @param NexGuardWatermarkingType $watermarkType
     * @return $this
     */
    public function watermarkType(NexGuardWatermarkingType $watermarkType)
    {
        $this->watermarkType = $watermarkType;

        return $this;
    }

    /**
     * Specify the payload ID that you want to be associated with this output. Valid values vary depending on your Nagra NexGuard forensic watermarking workflow. For PreRelease Content (NGPR), specify an integer from 1 through 4,194,303. You must generate a unique ID for each asset you watermark, and keep a record of th ID. Neither Nagra nor Bitmovin keep track of this for you.
     *
     * @param int $payload
     * @return $this
     */
    public function payload(int $payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Enter one of the watermarking preset strings that Nagra provides you.
     *
     * @param string $preset
     * @return $this
     */
    public function preset(string $preset)
    {
        $this->preset = $preset;

        return $this;
    }

    /**
     * Optional. Ignore this setting unless Nagra support directs you to specify a value. When you don&#39;t specify a value here, the Nagra NexGuard library uses its default value.
     *
     * @param NexGuardWatermarkingStrength $strength
     * @return $this
     */
    public function strength(NexGuardWatermarkingStrength $strength)
    {
        $this->strength = $strength;

        return $this;
    }
}

