<?php

namespace BitmovinApiSdk\Models;

class VorbisChannelLayout extends \BitmovinApiSdk\Common\Enum
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
    private const CL_5_1 = '5.1';

    /** @var string */
    private const CL_5_1_BACK = '5.1_BACK';

    /**
     * @param string $value
     * @return VorbisChannelLayout
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * No channel Layout
     *
     * @return VorbisChannelLayout
     */
    public static function NONE()
    {
        return new VorbisChannelLayout(self::NONE);
    }

    /**
     * Channel Layout Mono
     *
     * @return VorbisChannelLayout
     */
    public static function MONO()
    {
        return new VorbisChannelLayout(self::MONO);
    }

    /**
     * Channel Layout Stereo
     *
     * @return VorbisChannelLayout
     */
    public static function CL_STEREO()
    {
        return new VorbisChannelLayout(self::CL_STEREO);
    }

    /**
     * Channel Layout Surround
     *
     * @return VorbisChannelLayout
     */
    public static function CL_SURROUND()
    {
        return new VorbisChannelLayout(self::CL_SURROUND);
    }

    /**
     * Channel Layout Quad
     *
     * @return VorbisChannelLayout
     */
    public static function CL_QUAD()
    {
        return new VorbisChannelLayout(self::CL_QUAD);
    }

    /**
     * Channel Layout 2.1
     *
     * @return VorbisChannelLayout
     */
    public static function CL_2_1()
    {
        return new VorbisChannelLayout(self::CL_2_1);
    }

    /**
     * Channel Layout 2.2
     *
     * @return VorbisChannelLayout
     */
    public static function CL_2_2()
    {
        return new VorbisChannelLayout(self::CL_2_2);
    }

    /**
     * Channel Layout 3.1
     *
     * @return VorbisChannelLayout
     */
    public static function CL_3_1()
    {
        return new VorbisChannelLayout(self::CL_3_1);
    }

    /**
     * Channel Layout 4.0
     *
     * @return VorbisChannelLayout
     */
    public static function CL_4_0()
    {
        return new VorbisChannelLayout(self::CL_4_0);
    }

    /**
     * Channel Layout 5.1
     *
     * @return VorbisChannelLayout
     */
    public static function CL_5_1()
    {
        return new VorbisChannelLayout(self::CL_5_1);
    }

    /**
     * Channel Layout 5.1 Back
     *
     * @return VorbisChannelLayout
     */
    public static function CL_5_1_BACK()
    {
        return new VorbisChannelLayout(self::CL_5_1_BACK);
    }
}

