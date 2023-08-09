<?php

namespace BitmovinApiSdk\Models;

class StreamsType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const VIDEO = 'VIDEO';

    /** @var string */
    private const LIVE = 'LIVE';

    /**
     * @param string $value
     * @return StreamsType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * VIDEO
     *
     * @return StreamsType
     */
    public static function VIDEO()
    {
        return new StreamsType(self::VIDEO);
    }

    /**
     * LIVE
     *
     * @return StreamsType
     */
    public static function LIVE()
    {
        return new StreamsType(self::LIVE);
    }
}

