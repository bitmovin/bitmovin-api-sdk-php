<?php

namespace BitmovinApiSdk\Models;

class NexGuardABWatermarkingFeature extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const OTT = 'OTT';

    /** @var string */
    private const DUPLICATED = 'DUPLICATED';

    /**
     * @param string $value
     * @return NexGuardABWatermarkingFeature
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * For video streams with NexGuard FileMarker OTT Watermarking
     *
     * @return NexGuardABWatermarkingFeature
     */
    public static function OTT()
    {
        return new NexGuardABWatermarkingFeature(self::OTT);
    }

    /**
     * For audio streams that have been duplicated for NexGuard A/B Watermarking
     *
     * @return NexGuardABWatermarkingFeature
     */
    public static function DUPLICATED()
    {
        return new NexGuardABWatermarkingFeature(self::DUPLICATED);
    }
}

