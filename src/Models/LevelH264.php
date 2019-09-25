<?php

namespace BitmovinApiSdk\Models;

class LevelH264 extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const L1 = '1';

    /** @var string */
    private const L1b = '1b';

    /** @var string */
    private const L1_1 = '1.1';

    /** @var string */
    private const L1_2 = '1.2';

    /** @var string */
    private const L1_3 = '1.3';

    /** @var string */
    private const L2 = '2';

    /** @var string */
    private const L2_1 = '2.1';

    /** @var string */
    private const L2_2 = '2.2';

    /** @var string */
    private const L3 = '3';

    /** @var string */
    private const L3_1 = '3.1';

    /** @var string */
    private const L3_2 = '3.2';

    /** @var string */
    private const L4 = '4';

    /** @var string */
    private const L4_1 = '4.1';

    /** @var string */
    private const L4_2 = '4.2';

    /** @var string */
    private const L5 = '5';

    /** @var string */
    private const L5_1 = '5.1';

    /** @var string */
    private const L5_2 = '5.2';

    /**
     * @param string $value
     * @return LevelH264
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L1()
    {
        return new LevelH264(self::L1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L1b()
    {
        return new LevelH264(self::L1b);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L1_1()
    {
        return new LevelH264(self::L1_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L1_2()
    {
        return new LevelH264(self::L1_2);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L1_3()
    {
        return new LevelH264(self::L1_3);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L2()
    {
        return new LevelH264(self::L2);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L2_1()
    {
        return new LevelH264(self::L2_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L2_2()
    {
        return new LevelH264(self::L2_2);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L3()
    {
        return new LevelH264(self::L3);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L3_1()
    {
        return new LevelH264(self::L3_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L3_2()
    {
        return new LevelH264(self::L3_2);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L4()
    {
        return new LevelH264(self::L4);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L4_1()
    {
        return new LevelH264(self::L4_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L4_2()
    {
        return new LevelH264(self::L4_2);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L5()
    {
        return new LevelH264(self::L5);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L5_1()
    {
        return new LevelH264(self::L5_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/H.264/MPEG-4_AVC#Levels
     *
     * @return LevelH264
     */
    public static function L5_2()
    {
        return new LevelH264(self::L5_2);
    }
}

