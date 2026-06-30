<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class H265V2PerTitleConfiguration extends PerTitleConfiguration
{
    /** @var float */
    public $codecMinBitrateFactor;

    /** @var float */
    public $codecMaxBitrateFactor;

    /** @var float */
    public $codecBufsizeFactor;

    /** @var int */
    public $targetQualityQp;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * This factor is used to calculate the minBitrate of the codec configuration for the generated representations as a multiple of the targetBitrate
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

    /**
     * Desired target quality of the highest representation expressed as QP value used for the CQP probe encode
     *
     * @param int $targetQualityQp
     * @return $this
     */
    public function targetQualityQp(int $targetQualityQp)
    {
        $this->targetQualityQp = $targetQualityQp;

        return $this;
    }
}

