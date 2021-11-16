<?php

namespace BitmovinApiSdk\Models;

class Vp9DynamicRangeFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const HLG = 'HLG';

    /** @var string */
    private const SDR = 'SDR';

    /**
     * @param string $value
     * @return Vp9DynamicRangeFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Configures what kind of dynamic range the output should conform to. Can be used to convert from SDR to HLG, from HLG to SDR.
     *
     * @return Vp9DynamicRangeFormat
     */
    public static function HLG()
    {
        return new Vp9DynamicRangeFormat(self::HLG);
    }

    /**
     * Configures what kind of dynamic range the output should conform to. Can be used to convert from SDR to HLG, from HLG to SDR.
     *
     * @return Vp9DynamicRangeFormat
     */
    public static function SDR()
    {
        return new Vp9DynamicRangeFormat(self::SDR);
    }
}

