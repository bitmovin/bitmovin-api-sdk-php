<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalPlusChannelLayout extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const MONO = 'MONO';

    /** @var string */
    private const CL_STEREO = 'STEREO';

    /** @var string */
    private const CL_SURROUND = 'SURROUND';

    /** @var string */
    private const CL_3_1 = '3.1';

    /** @var string */
    private const CL_BACK_SURROUND = 'BACK_SURROUND';

    /** @var string */
    private const CL_BACK_SURROUND_LFE = 'BACK_SURROUND_LFE';

    /** @var string */
    private const CL_QUAD = 'QUAD';

    /** @var string */
    private const CL_QUAD_LFE = 'QUAD_LFE';

    /** @var string */
    private const CL_4_0 = '4.0';

    /** @var string */
    private const CL_4_1 = '4.1';

    /** @var string */
    private const CL_5_0 = '5.0';

    /** @var string */
    private const CL_5_1 = '5.1';

    /**
     * @param string $value
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * No channel layout
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function NONE()
    {
        return new DolbyDigitalPlusChannelLayout(self::NONE);
    }

    /**
     * Channel layout Mono
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function MONO()
    {
        return new DolbyDigitalPlusChannelLayout(self::MONO);
    }

    /**
     * Channel layout Stereo
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function CL_STEREO()
    {
        return new DolbyDigitalPlusChannelLayout(self::CL_STEREO);
    }

    /**
     * Channel layout 3.0 (3 front (left + center + right), no LFE)
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function CL_SURROUND()
    {
        return new DolbyDigitalPlusChannelLayout(self::CL_SURROUND);
    }

    /**
     * Channel layout 3.1 (3 front (left + center + right), LFE)
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function CL_3_1()
    {
        return new DolbyDigitalPlusChannelLayout(self::CL_3_1);
    }

    /**
     * Channel layout Surround (2 front (left + right), 1 back center, no LFE)
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function CL_BACK_SURROUND()
    {
        return new DolbyDigitalPlusChannelLayout(self::CL_BACK_SURROUND);
    }

    /**
     * Channel layout Surround with LFE (2 front (left + right), 1 back center, LFE)
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function CL_BACK_SURROUND_LFE()
    {
        return new DolbyDigitalPlusChannelLayout(self::CL_BACK_SURROUND_LFE);
    }

    /**
     * Channel layout Quad (2 front (left + right), 2 back (left + right), no LFE)
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function CL_QUAD()
    {
        return new DolbyDigitalPlusChannelLayout(self::CL_QUAD);
    }

    /**
     * Channel layout Quad with LFE (2 front (left + right), 2 back (left + right), LFE)
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function CL_QUAD_LFE()
    {
        return new DolbyDigitalPlusChannelLayout(self::CL_QUAD_LFE);
    }

    /**
     * Channel layout 4.0 (3 front (left + center + right), 1 back center, no LFE)
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function CL_4_0()
    {
        return new DolbyDigitalPlusChannelLayout(self::CL_4_0);
    }

    /**
     * Channel layout 4.1 (3 front (left + center + right), 1 back center, LFE)
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function CL_4_1()
    {
        return new DolbyDigitalPlusChannelLayout(self::CL_4_1);
    }

    /**
     * Channel layout 5.0 (3 front (left + center + right), 2 side (left + right), no LFE)
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function CL_5_0()
    {
        return new DolbyDigitalPlusChannelLayout(self::CL_5_0);
    }

    /**
     * Channel layout 5.1 (3 front (left + center + right), 2 side (left + right), LFE)
     *
     * @return DolbyDigitalPlusChannelLayout
     */
    public static function CL_5_1()
    {
        return new DolbyDigitalPlusChannelLayout(self::CL_5_1);
    }
}

