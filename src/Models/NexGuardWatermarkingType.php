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
     * A/B watermarking
     *
     * @return NexGuardWatermarkingType
     */
    public static function OTT()
    {
        return new NexGuardWatermarkingType(self::OTT);
    }

    /**
     * Required for Audio to duplicate the stream
     *
     * @return NexGuardWatermarkingType
     */
    public static function DUPLICATED()
    {
        return new NexGuardWatermarkingType(self::DUPLICATED);
    }
}

