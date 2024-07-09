<?php

namespace BitmovinApiSdk\Models;

class PcmChannelLayout extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MONO = 'MONO';

    /** @var string */
    private const STEREO = 'STEREO';

    /**
     * @param string $value
     * @return PcmChannelLayout
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Channel layout with single channel
     *
     * @return PcmChannelLayout
     */
    public static function MONO()
    {
        return new PcmChannelLayout(self::MONO);
    }

    /**
     * Channel layout with left and right channel
     *
     * @return PcmChannelLayout
     */
    public static function STEREO()
    {
        return new PcmChannelLayout(self::STEREO);
    }
}

