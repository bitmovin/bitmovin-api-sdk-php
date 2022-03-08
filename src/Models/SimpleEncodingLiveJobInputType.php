<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingLiveJobInputType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const RTMP = 'RTMP';

    /** @var string */
    private const SRT_LISTENER = 'SRT_LISTENER';

    /**
     * @param string $value
     * @return SimpleEncodingLiveJobInputType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Live encoding with RTMP input
     *
     * @return SimpleEncodingLiveJobInputType
     */
    public static function RTMP()
    {
        return new SimpleEncodingLiveJobInputType(self::RTMP);
    }

    /**
     * Live encoding with SRT input in listener mode
     *
     * @return SimpleEncodingLiveJobInputType
     */
    public static function SRT_LISTENER()
    {
        return new SimpleEncodingLiveJobInputType(self::SRT_LISTENER);
    }
}

