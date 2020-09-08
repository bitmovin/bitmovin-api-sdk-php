<?php

namespace BitmovinApiSdk\Models;

class PcmChannelLayout extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MONO = 'MONO';

    /**
     * @param string $value
     * @return PcmChannelLayout
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Channel layout Mono
     *
     * @return PcmChannelLayout
     */
    public static function MONO()
    {
        return new PcmChannelLayout(self::MONO);
    }
}

