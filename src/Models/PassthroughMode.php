<?php

namespace BitmovinApiSdk\Models;

class PassthroughMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const VIDEO_STREAM = 'VIDEO_STREAM';

    /** @var string */
    private const CAPTION_STREAM = 'CAPTION_STREAM';

    /**
     * @param string $value
     * @return PassthroughMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Configure if the encoding should use the video stream as the passthrough mode or a dedicated caption stream.
     *
     * @return PassthroughMode
     */
    public static function VIDEO_STREAM()
    {
        return new PassthroughMode(self::VIDEO_STREAM);
    }

    /**
     * Configure if the encoding should use the video stream as the passthrough mode or a dedicated caption stream.
     *
     * @return PassthroughMode
     */
    public static function CAPTION_STREAM()
    {
        return new PassthroughMode(self::CAPTION_STREAM);
    }
}

