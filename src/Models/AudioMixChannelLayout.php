<?php

namespace BitmovinApiSdk\Models;

class AudioMixChannelLayout extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const CL_MONO = 'MONO';

    /** @var string */
    private const CL_STEREO = 'STEREO';

    /** @var string */
    private const CL_SURROUND = 'SURROUND';

    /** @var string */
    private const CL_QUAD = 'QUAD';

    /** @var string */
    private const CL_OCTAGONAL = 'OCTAGONAL';

    /** @var string */
    private const CL_HEXAGONAL = 'HEXAGONAL';

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
    private const CL_6_1_BACK = '6.1_BACK';

    /** @var string */
    private const CL_6_1_FRONT = '6.1_FRONT';

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
     * @return AudioMixChannelLayout
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function NONE()
    {
        return new AudioMixChannelLayout(self::NONE);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_MONO()
    {
        return new AudioMixChannelLayout(self::CL_MONO);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_STEREO()
    {
        return new AudioMixChannelLayout(self::CL_STEREO);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_SURROUND()
    {
        return new AudioMixChannelLayout(self::CL_SURROUND);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_QUAD()
    {
        return new AudioMixChannelLayout(self::CL_QUAD);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_OCTAGONAL()
    {
        return new AudioMixChannelLayout(self::CL_OCTAGONAL);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_HEXAGONAL()
    {
        return new AudioMixChannelLayout(self::CL_HEXAGONAL);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_STEREO_DOWNMIX()
    {
        return new AudioMixChannelLayout(self::CL_STEREO_DOWNMIX);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_2_1()
    {
        return new AudioMixChannelLayout(self::CL_2_1);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_2_2()
    {
        return new AudioMixChannelLayout(self::CL_2_2);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_3_1()
    {
        return new AudioMixChannelLayout(self::CL_3_1);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_4_0()
    {
        return new AudioMixChannelLayout(self::CL_4_0);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_4_1()
    {
        return new AudioMixChannelLayout(self::CL_4_1);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_5_0()
    {
        return new AudioMixChannelLayout(self::CL_5_0);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_5_1()
    {
        return new AudioMixChannelLayout(self::CL_5_1);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_5_0_BACK()
    {
        return new AudioMixChannelLayout(self::CL_5_0_BACK);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_5_1_BACK()
    {
        return new AudioMixChannelLayout(self::CL_5_1_BACK);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_6_0()
    {
        return new AudioMixChannelLayout(self::CL_6_0);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_6_0_FRONT()
    {
        return new AudioMixChannelLayout(self::CL_6_0_FRONT);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_6_1()
    {
        return new AudioMixChannelLayout(self::CL_6_1);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_6_1_BACK()
    {
        return new AudioMixChannelLayout(self::CL_6_1_BACK);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_6_1_FRONT()
    {
        return new AudioMixChannelLayout(self::CL_6_1_FRONT);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_7_0()
    {
        return new AudioMixChannelLayout(self::CL_7_0);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_7_0_FRONT()
    {
        return new AudioMixChannelLayout(self::CL_7_0_FRONT);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_7_1()
    {
        return new AudioMixChannelLayout(self::CL_7_1);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_7_1_WIDE()
    {
        return new AudioMixChannelLayout(self::CL_7_1_WIDE);
    }

    /**
     * Channel layout of this audio mix
     *
     * @return AudioMixChannelLayout
     */
    public static function CL_7_1_WIDE_BACK()
    {
        return new AudioMixChannelLayout(self::CL_7_1_WIDE_BACK);
    }
}

