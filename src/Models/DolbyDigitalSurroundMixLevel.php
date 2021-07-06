<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalSurroundMixLevel extends \BitmovinApiSdk\Common\Enum
{
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
     * @return DolbyDigitalSurroundMixLevel
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * -1.5 dB
     *
     * @return DolbyDigitalSurroundMixLevel
     */
    public static function MINUS_1_5_DB()
    {
        return new DolbyDigitalSurroundMixLevel(self::MINUS_1_5_DB);
    }

    /**
     * -3 dB
     *
     * @return DolbyDigitalSurroundMixLevel
     */
    public static function MINUS_3_DB()
    {
        return new DolbyDigitalSurroundMixLevel(self::MINUS_3_DB);
    }

    /**
     * -4.5 dB
     *
     * @return DolbyDigitalSurroundMixLevel
     */
    public static function MINUS_4_5_DB()
    {
        return new DolbyDigitalSurroundMixLevel(self::MINUS_4_5_DB);
    }

    /**
     * -6 dB
     *
     * @return DolbyDigitalSurroundMixLevel
     */
    public static function MINUS_6_DB()
    {
        return new DolbyDigitalSurroundMixLevel(self::MINUS_6_DB);
    }

    /**
     * MINUS_INFINITY_DB
     *
     * @return DolbyDigitalSurroundMixLevel
     */
    public static function MINUS_INFINITY_DB()
    {
        return new DolbyDigitalSurroundMixLevel(self::MINUS_INFINITY_DB);
    }
}

