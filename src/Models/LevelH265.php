<?php

namespace BitmovinApiSdk\Models;

class LevelH265 extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const L1 = '1';

    /** @var string */
    private const L2 = '2';

    /** @var string */
    private const L2_1 = '2.1';

    /** @var string */
    private const L3 = '3';

    /** @var string */
    private const L3_1 = '3.1';

    /** @var string */
    private const L4 = '4';

    /** @var string */
    private const L4_1 = '4.1';

    /** @var string */
    private const L5 = '5';

    /** @var string */
    private const L5_1 = '5.1';

    /** @var string */
    private const L5_2 = '5.2';

    /** @var string */
    private const L6 = '6';

    /** @var string */
    private const L6_1 = '6.1';

    /** @var string */
    private const L6_2 = '6.2';

    /**
     * @param string $value
     * @return LevelH265
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L1()
    {
        return new LevelH265(self::L1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L2()
    {
        return new LevelH265(self::L2);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L2_1()
    {
        return new LevelH265(self::L2_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L3()
    {
        return new LevelH265(self::L3);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L3_1()
    {
        return new LevelH265(self::L3_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L4()
    {
        return new LevelH265(self::L4);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L4_1()
    {
        return new LevelH265(self::L4_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L5()
    {
        return new LevelH265(self::L5);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L5_1()
    {
        return new LevelH265(self::L5_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L5_2()
    {
        return new LevelH265(self::L5_2);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L6()
    {
        return new LevelH265(self::L6);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L6_1()
    {
        return new LevelH265(self::L6_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://en.wikipedia.org/wiki/High_Efficiency_Video_Coding_tiers_and_levels
     *
     * @return LevelH265
     */
    public static function L6_2()
    {
        return new LevelH265(self::L6_2);
    }
}

