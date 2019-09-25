<?php

namespace BitmovinApiSdk\Models;

class Ac3ChannelLayout extends \BitmovinApiSdk\Common\Enum
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
    private const CL_QUAD = 'QUAD';

    /** @var string */
    private const CL_2_1 = '2.1';

    /** @var string */
    private const CL_2_2 = '2.2';

    /** @var string */
    private const CL_3_1 = '3.1';

    /** @var string */
    private const CL_4_0 = '4.0';

    /** @var string */
    private const CL_4_1 = '4.1';

    /** @var string */
    private const CL_5_0 = '5.0';

    /** @var string */
    private const CL_5_0_BACK = '5.0_BACK';

    /** @var string */
    private const CL_5_1 = '5.1';

    /** @var string */
    private const CL_5_1_BACK = '5.1_BACK';

    /**
     * @param string $value
     * @return Ac3ChannelLayout
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * No channel layout
     *
     * @return Ac3ChannelLayout
     */
    public static function NONE()
    {
        return new Ac3ChannelLayout(self::NONE);
    }

    /**
     * Channel layout Mono
     *
     * @return Ac3ChannelLayout
     */
    public static function MONO()
    {
        return new Ac3ChannelLayout(self::MONO);
    }

    /**
     * Channel layout Stereo
     *
     * @return Ac3ChannelLayout
     */
    public static function CL_STEREO()
    {
        return new Ac3ChannelLayout(self::CL_STEREO);
    }

    /**
     * Channel layout Surround
     *
     * @return Ac3ChannelLayout
     */
    public static function CL_SURROUND()
    {
        return new Ac3ChannelLayout(self::CL_SURROUND);
    }

    /**
     * Channel layout Quad
     *
     * @return Ac3ChannelLayout
     */
    public static function CL_QUAD()
    {
        return new Ac3ChannelLayout(self::CL_QUAD);
    }

    /**
     * Channel layout 2.1
     *
     * @return Ac3ChannelLayout
     */
    public static function CL_2_1()
    {
        return new Ac3ChannelLayout(self::CL_2_1);
    }

    /**
     * Channel layout 2.2
     *
     * @return Ac3ChannelLayout
     */
    public static function CL_2_2()
    {
        return new Ac3ChannelLayout(self::CL_2_2);
    }

    /**
     * Channel layout 3.1
     *
     * @return Ac3ChannelLayout
     */
    public static function CL_3_1()
    {
        return new Ac3ChannelLayout(self::CL_3_1);
    }

    /**
     * Channel layout 4.0
     *
     * @return Ac3ChannelLayout
     */
    public static function CL_4_0()
    {
        return new Ac3ChannelLayout(self::CL_4_0);
    }

    /**
     * Channel layout 4.1
     *
     * @return Ac3ChannelLayout
     */
    public static function CL_4_1()
    {
        return new Ac3ChannelLayout(self::CL_4_1);
    }

    /**
     * Channel layout 5.0
     *
     * @return Ac3ChannelLayout
     */
    public static function CL_5_0()
    {
        return new Ac3ChannelLayout(self::CL_5_0);
    }

    /**
     * Channel layout 5.0 Back
     *
     * @return Ac3ChannelLayout
     */
    public static function CL_5_0_BACK()
    {
        return new Ac3ChannelLayout(self::CL_5_0_BACK);
    }

    /**
     * Channel layout 5.1
     *
     * @return Ac3ChannelLayout
     */
    public static function CL_5_1()
    {
        return new Ac3ChannelLayout(self::CL_5_1);
    }

    /**
     * Channel layout 5.1 Back
     *
     * @return Ac3ChannelLayout
     */
    public static function CL_5_1_BACK()
    {
        return new Ac3ChannelLayout(self::CL_5_1_BACK);
    }
}

