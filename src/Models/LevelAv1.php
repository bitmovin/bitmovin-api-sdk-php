<?php

namespace BitmovinApiSdk\Models;

class LevelAv1 extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const L2_0 = '2.0';

    /** @var string */
    private const L2_1 = '2.1';

    /** @var string */
    private const L3_0 = '3.0';

    /** @var string */
    private const L3_1 = '3.1';

    /** @var string */
    private const L4_0 = '4.0';

    /** @var string */
    private const L4_1 = '4.1';

    /** @var string */
    private const L5_0 = '5.0';

    /** @var string */
    private const L5_1 = '5.1';

    /** @var string */
    private const L5_2 = '5.2';

    /** @var string */
    private const L5_3 = '5.3';

    /** @var string */
    private const L6_0 = '6.0';

    /** @var string */
    private const L6_1 = '6.1';

    /** @var string */
    private const L6_2 = '6.2';

    /** @var string */
    private const L6_3 = '6.3';

    /**
     * @param string $value
     * @return LevelAv1
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L2_0()
    {
        return new LevelAv1(self::L2_0);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L2_1()
    {
        return new LevelAv1(self::L2_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L3_0()
    {
        return new LevelAv1(self::L3_0);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L3_1()
    {
        return new LevelAv1(self::L3_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L4_0()
    {
        return new LevelAv1(self::L4_0);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L4_1()
    {
        return new LevelAv1(self::L4_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L5_0()
    {
        return new LevelAv1(self::L5_0);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L5_1()
    {
        return new LevelAv1(self::L5_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L5_2()
    {
        return new LevelAv1(self::L5_2);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L5_3()
    {
        return new LevelAv1(self::L5_3);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L6_0()
    {
        return new LevelAv1(self::L6_0);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L6_1()
    {
        return new LevelAv1(self::L6_1);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L6_2()
    {
        return new LevelAv1(self::L6_2);
    }

    /**
     * Specified set of constraints that indicate a degree of required decoder performance for a profile, see: https://aomediacodec.github.io/av1-spec/av1-spec.pdf (Annex A.3)
     *
     * @return LevelAv1
     */
    public static function L6_3()
    {
        return new LevelAv1(self::L6_3);
    }
}

