<?php

namespace BitmovinApiSdk\Models;

class NexGuardWatermarkingType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const OTT = 'OTT';

    /** @var string */
    private const DUPLICATED = 'DUPLICATED';

    /**
     * @param string $value
     * @return NexGuardWatermarkingType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * A/B watermarking (for video streams only)
     *
     * @return NexGuardWatermarkingType
     */
    public static function OTT()
    {
        return new NexGuardWatermarkingType(self::OTT);
    }

    /**
     * Stream duplication to match A/B video streams in CDN delivery (for audio streams only)
     *
     * @return NexGuardWatermarkingType
     */
    public static function DUPLICATED()
    {
        return new NexGuardWatermarkingType(self::DUPLICATED);
    }
}

