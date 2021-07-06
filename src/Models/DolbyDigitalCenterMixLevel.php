<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalCenterMixLevel extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PLUS_3_DB = 'PLUS_3_DB';

    /** @var string */
    private const PLUS_1_5_DB = 'PLUS_1_5_DB';

    /** @var string */
    private const ZERO_DB = 'ZERO_DB';

    /** @var string */
    private const MINUS_1_5_DB = 'MINUS_1_5_DB';

    /** @var string */
    private const MINUS_3_DB = 'MINUS_3_DB';

    /** @var string */
    private const MINUS_4_5_DB = 'MINUS_4_5_DB';

    /** @var string */
    private const MINUS_6_DB = 'MINUS_6_DB';

    /** @var string */
    private const MINUS_INFINITY_DB = 'MINUS_INFINITY_DB';

    /**
     * @param string $value
     * @return DolbyDigitalCenterMixLevel
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * +3 dB
     *
     * @return DolbyDigitalCenterMixLevel
     */
    public static function PLUS_3_DB()
    {
        return new DolbyDigitalCenterMixLevel(self::PLUS_3_DB);
    }

    /**
     * +1.5 dB
     *
     * @return DolbyDigitalCenterMixLevel
     */
    public static function PLUS_1_5_DB()
    {
        return new DolbyDigitalCenterMixLevel(self::PLUS_1_5_DB);
    }

    /**
     * 0 dB
     *
     * @return DolbyDigitalCenterMixLevel
     */
    public static function ZERO_DB()
    {
        return new DolbyDigitalCenterMixLevel(self::ZERO_DB);
    }

    /**
     * -1.5 dB
     *
     * @return DolbyDigitalCenterMixLevel
     */
    public static function MINUS_1_5_DB()
    {
        return new DolbyDigitalCenterMixLevel(self::MINUS_1_5_DB);
    }

    /**
     * -3 dB
     *
     * @return DolbyDigitalCenterMixLevel
     */
    public static function MINUS_3_DB()
    {
        return new DolbyDigitalCenterMixLevel(self::MINUS_3_DB);
    }

    /**
     * -4.5 dB
     *
     * @return DolbyDigitalCenterMixLevel
     */
    public static function MINUS_4_5_DB()
    {
        return new DolbyDigitalCenterMixLevel(self::MINUS_4_5_DB);
    }

    /**
     * -6 dB
     *
     * @return DolbyDigitalCenterMixLevel
     */
    public static function MINUS_6_DB()
    {
        return new DolbyDigitalCenterMixLevel(self::MINUS_6_DB);
    }

    /**
     * -∞ dB
     *
     * @return DolbyDigitalCenterMixLevel
     */
    public static function MINUS_INFINITY_DB()
    {
        return new DolbyDigitalCenterMixLevel(self::MINUS_INFINITY_DB);
    }
}

