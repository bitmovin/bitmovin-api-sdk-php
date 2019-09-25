<?php

namespace BitmovinApiSdk\Models;

class OpusChannelLayout extends \BitmovinApiSdk\Common\Enum
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
    private const CL_4_1 = '4.1';

    /** @var string */
    private const CL_5_0_BACK = '5.0_BACK';

    /** @var string */
    private const XCL_5_1_BACK = '5.1_BACK';

    /** @var string */
    private const CL_6_1 = '6.1';

    /** @var string */
    private const CL_7_1 = '7.1';

    /**
     * @param string $value
     * @return OpusChannelLayout
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * No channel Layout
     *
     * @return OpusChannelLayout
     */
    public static function NONE()
    {
        return new OpusChannelLayout(self::NONE);
    }

    /**
     * Channel Layout Mono
     *
     * @return OpusChannelLayout
     */
    public static function MONO()
    {
        return new OpusChannelLayout(self::MONO);
    }

    /**
     * Channel Layout Stereo
     *
     * @return OpusChannelLayout
     */
    public static function CL_STEREO()
    {
        return new OpusChannelLayout(self::CL_STEREO);
    }

    /**
     * Channel Layout Surround
     *
     * @return OpusChannelLayout
     */
    public static function CL_SURROUND()
    {
        return new OpusChannelLayout(self::CL_SURROUND);
    }

    /**
     * Channel Layout Quad
     *
     * @return OpusChannelLayout
     */
    public static function CL_QUAD()
    {
        return new OpusChannelLayout(self::CL_QUAD);
    }

    /**
     * Channel Layout 4.1
     *
     * @return OpusChannelLayout
     */
    public static function CL_4_1()
    {
        return new OpusChannelLayout(self::CL_4_1);
    }

    /**
     * Channel Layout 5.0 Back
     *
     * @return OpusChannelLayout
     */
    public static function CL_5_0_BACK()
    {
        return new OpusChannelLayout(self::CL_5_0_BACK);
    }

    /**
     * Channel Layout 5.1 Back
     *
     * @return OpusChannelLayout
     */
    public static function XCL_5_1_BACK()
    {
        return new OpusChannelLayout(self::XCL_5_1_BACK);
    }

    /**
     * Channel Layout 6.1
     *
     * @return OpusChannelLayout
     */
    public static function CL_6_1()
    {
        return new OpusChannelLayout(self::CL_6_1);
    }

    /**
     * Channel Layout 7.1
     *
     * @return OpusChannelLayout
     */
    public static function CL_7_1()
    {
        return new OpusChannelLayout(self::CL_7_1);
    }
}

