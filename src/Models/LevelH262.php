<?php

namespace BitmovinApiSdk\Models;

class LevelH262 extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MAIN = 'MAIN';

    /** @var string */
    private const HIGH = 'HIGH';

    /**
     * @param string $value
     * @return LevelH262
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH262
     */
    public static function MAIN()
    {
        return new LevelH262(self::MAIN);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH262
     */
    public static function HIGH()
    {
        return new LevelH262(self::HIGH);
    }
}

