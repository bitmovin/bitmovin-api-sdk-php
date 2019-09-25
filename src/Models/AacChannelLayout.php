<?php

namespace BitmovinApiSdk\Models;

class AacChannelLayout extends \BitmovinApiSdk\Common\Enum
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
    private const CL_4_0 = '4.0';

    /** @var string */
    private const CL_5_0_BACK = '5.0_BACK';

    /** @var string */
    private const CL_5_1_BACK = '5.1_BACK';

    /** @var string */
    private const CL_7_1 = '7.1';

    /** @var string */
    private const CL_7_1_WIDE_BACK = '7.1_WIDE_BACK';

    /**
     * @param string $value
     * @return AacChannelLayout
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * No channel layout
     *
     * @return AacChannelLayout
     */
    public static function NONE()
    {
        return new AacChannelLayout(self::NONE);
    }

    /**
     * Channel layout Mono
     *
     * @return AacChannelLayout
     */
    public static function MONO()
    {
        return new AacChannelLayout(self::MONO);
    }

    /**
     * Channel layout Stereo
     *
     * @return AacChannelLayout
     */
    public static function CL_STEREO()
    {
        return new AacChannelLayout(self::CL_STEREO);
    }

    /**
     * Channel layout Surround
     *
     * @return AacChannelLayout
     */
    public static function CL_SURROUND()
    {
        return new AacChannelLayout(self::CL_SURROUND);
    }

    /**
     * Channel layout 4.0
     *
     * @return AacChannelLayout
     */
    public static function CL_4_0()
    {
        return new AacChannelLayout(self::CL_4_0);
    }

    /**
     * Channel layout 5.0 Back
     *
     * @return AacChannelLayout
     */
    public static function CL_5_0_BACK()
    {
        return new AacChannelLayout(self::CL_5_0_BACK);
    }

    /**
     * Channel layout 5.1 Back
     *
     * @return AacChannelLayout
     */
    public static function CL_5_1_BACK()
    {
        return new AacChannelLayout(self::CL_5_1_BACK);
    }

    /**
     * Channel layout 7.1
     *
     * @return AacChannelLayout
     */
    public static function CL_7_1()
    {
        return new AacChannelLayout(self::CL_7_1);
    }

    /**
     * Channel layout 7.1 Wide Back
     *
     * @return AacChannelLayout
     */
    public static function CL_7_1_WIDE_BACK()
    {
        return new AacChannelLayout(self::CL_7_1_WIDE_BACK);
    }
}

