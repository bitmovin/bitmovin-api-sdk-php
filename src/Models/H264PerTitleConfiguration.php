<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class H264PerTitleConfiguration extends PerTitleConfiguration
{
    /** @var float */
    public $codecMinBitrateFactor;

    /** @var float */
    public $codecMaxBitrateFactor;

    /** @var float */
    public $codecBufsizeFactor;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * This factor doesn&#39;t have any impact!
     *
     * @param float $codecMinBitrateFactor
     * @return $this
     */
    public function codecMinBitrateFactor(float $codecMinBitrateFactor)
    {
        $this->codecMinBitrateFactor = $codecMinBitrateFactor;

        return $this;
    }

    /**
     * This factor is used to calculate the maxBitrate of the codec configuration for the generated representations as a multiple of the targetBitrate
     *
     * @param float $codecMaxBitrateFactor
     * @return $this
     */
    public function codecMaxBitrateFactor(float $codecMaxBitrateFactor)
    {
        $this->codecMaxBitrateFactor = $codecMaxBitrateFactor;

        return $this;
    }

    /**
     * This factor is used to calculate the bufsize of the codec configuration for the generated representations as a multiple of the targetBitrate
     *
     * @param float $codecBufsizeFactor
     * @return $this
     */
    public function codecBufsizeFactor(float $codecBufsizeFactor)
    {
        $this->codecBufsizeFactor = $codecBufsizeFactor;

        return $this;
    }
}

