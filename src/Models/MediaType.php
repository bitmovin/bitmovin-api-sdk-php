<?php

namespace BitmovinApiSdk\Models;

class MediaType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const VIDEO = 'VIDEO';

    /** @var string */
    private const AUDIO = 'AUDIO';

    /**
     * @param string $value
     * @return MediaType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * VIDEO
     *
     * @return MediaType
     */
    public static function VIDEO()
    {
        return new MediaType(self::VIDEO);
    }

    /**
     * AUDIO
     *
     * @return MediaType
     */
    public static function AUDIO()
    {
        return new MediaType(self::AUDIO);
    }
}

