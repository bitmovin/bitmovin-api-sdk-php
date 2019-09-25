<?php

namespace BitmovinApiSdk\Models;

class ChannelLayout extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const MONO = 'MONO';

    /** @var string */
    private const CL_STEREO = 'STEREO';

    /**
     * @param string $value
     * @return ChannelLayout
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * No channel layout
     *
     * @return ChannelLayout
     */
    public static function NONE()
    {
        return new ChannelLayout(self::NONE);
    }

    /**
     * Channel layout Mono
     *
     * @return ChannelLayout
     */
    public static function MONO()
    {
        return new ChannelLayout(self::MONO);
    }

    /**
     * Channel layout Stereo
     *
     * @return ChannelLayout
     */
    public static function CL_STEREO()
    {
        return new ChannelLayout(self::CL_STEREO);
    }
}

