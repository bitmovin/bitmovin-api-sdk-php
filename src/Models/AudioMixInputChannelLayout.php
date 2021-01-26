<?php

namespace BitmovinApiSdk\Models;

class AudioMixInputChannelLayout extends \BitmovinApiSdk\Common\Enum
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
    private const CL_HEXAGONAL = 'HEXAGONAL';

    /** @var string */
    private const CL_OCTAGONAL = 'OCTAGONAL';

    /** @var string */
    private const CL_STEREO_DOWNMIX = 'STEREO_DOWNMIX';

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
    private const CL_5_1 = '5.1';

    /** @var string */
    private const CL_5_0_BACK = '5.0_BACK';

    /** @var string */
    private const CL_5_1_BACK = '5.1_BACK';

    /** @var string */
    private const CL_6_0 = '6.0';

    /** @var string */
    private const CL_6_0_FRONT = '6.0_FRONT';

    /** @var string */
    private const CL_6_1 = '6.1';

    /** @var string */
    private const CL_6_1_FRONT = '6.1_FRONT';

    /** @var string */
    private const CL_6_1_BACK = '6.1_BACK';

    /** @var string */
    private const CL_7_0 = '7.0';

    /** @var string */
    private const CL_7_0_FRONT = '7.0_FRONT';

    /** @var string */
    private const CL_7_1 = '7.1';

    /** @var string */
    private const CL_7_1_WIDE = '7.1_WIDE';

    /** @var string */
    private const CL_7_1_WIDE_BACK = '7.1_WIDE_BACK';

    /**
     * @param string $value
     * @return AudioMixInputChannelLayout
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * No channel layout
     *
     * @return AudioMixInputChannelLayout
     */
    public static function NONE()
    {
        return new AudioMixInputChannelLayout(self::NONE);
    }

    /**
     * Channel layout Mono
     *
     * @return AudioMixInputChannelLayout
     */
    public static function MONO()
    {
        return new AudioMixInputChannelLayout(self::MONO);
    }

    /**
     * Channel layout Stereo
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_STEREO()
    {
        return new AudioMixInputChannelLayout(self::CL_STEREO);
    }

    /**
     * Channel layout Surround
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_SURROUND()
    {
        return new AudioMixInputChannelLayout(self::CL_SURROUND);
    }

    /**
     * Channel layout Quad
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_QUAD()
    {
        return new AudioMixInputChannelLayout(self::CL_QUAD);
    }

    /**
     * Channel layout Hexagonal
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_HEXAGONAL()
    {
        return new AudioMixInputChannelLayout(self::CL_HEXAGONAL);
    }

    /**
     * Channel layout Octagonal
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_OCTAGONAL()
    {
        return new AudioMixInputChannelLayout(self::CL_OCTAGONAL);
    }

    /**
     * Channel layout Stereo Downmix
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_STEREO_DOWNMIX()
    {
        return new AudioMixInputChannelLayout(self::CL_STEREO_DOWNMIX);
    }

    /**
     * Channel layout 2.1
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_2_1()
    {
        return new AudioMixInputChannelLayout(self::CL_2_1);
    }

    /**
     * Channel layout 2.2
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_2_2()
    {
        return new AudioMixInputChannelLayout(self::CL_2_2);
    }

    /**
     * Channel layout 3.1
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_3_1()
    {
        return new AudioMixInputChannelLayout(self::CL_3_1);
    }

    /**
     * Channel layout 4.0
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_4_0()
    {
        return new AudioMixInputChannelLayout(self::CL_4_0);
    }

    /**
     * Channel layout 4.1
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_4_1()
    {
        return new AudioMixInputChannelLayout(self::CL_4_1);
    }

    /**
     * Channel layout 5.0
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_5_0()
    {
        return new AudioMixInputChannelLayout(self::CL_5_0);
    }

    /**
     * Channel layout 5.1
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_5_1()
    {
        return new AudioMixInputChannelLayout(self::CL_5_1);
    }

    /**
     * Channel layout 5.0 Back
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_5_0_BACK()
    {
        return new AudioMixInputChannelLayout(self::CL_5_0_BACK);
    }

    /**
     * Channel layout 5.1 Back
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_5_1_BACK()
    {
        return new AudioMixInputChannelLayout(self::CL_5_1_BACK);
    }

    /**
     * Channel layout 6.0
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_6_0()
    {
        return new AudioMixInputChannelLayout(self::CL_6_0);
    }

    /**
     * Channel layout 6.0 Front
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_6_0_FRONT()
    {
        return new AudioMixInputChannelLayout(self::CL_6_0_FRONT);
    }

    /**
     * Channel layout 6.1
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_6_1()
    {
        return new AudioMixInputChannelLayout(self::CL_6_1);
    }

    /**
     * Channel layout 6.1 Front
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_6_1_FRONT()
    {
        return new AudioMixInputChannelLayout(self::CL_6_1_FRONT);
    }

    /**
     * Channel layout 6.1 Back
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_6_1_BACK()
    {
        return new AudioMixInputChannelLayout(self::CL_6_1_BACK);
    }

    /**
     * Channel layout 7.0
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_7_0()
    {
        return new AudioMixInputChannelLayout(self::CL_7_0);
    }

    /**
     * Channel layout 7.0 Front
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_7_0_FRONT()
    {
        return new AudioMixInputChannelLayout(self::CL_7_0_FRONT);
    }

    /**
     * Channel layout 7.1
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_7_1()
    {
        return new AudioMixInputChannelLayout(self::CL_7_1);
    }

    /**
     * Channel layout 7.1 Wide
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_7_1_WIDE()
    {
        return new AudioMixInputChannelLayout(self::CL_7_1_WIDE);
    }

    /**
     * Channel layout 7.1 Wide Back
     *
     * @return AudioMixInputChannelLayout
     */
    public static function CL_7_1_WIDE_BACK()
    {
        return new AudioMixInputChannelLayout(self::CL_7_1_WIDE_BACK);
    }
}

