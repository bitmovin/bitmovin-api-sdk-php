<?php

namespace BitmovinApiSdk\Models;

class PassthroughMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const VIDEO_STREAM = 'VIDEO_STREAM';

    /** @var string */
    private const CAPTION_STREAM = 'CAPTION_STREAM';

    /** @var string */
    private const VIDEO_CAPTION_STREAM = 'VIDEO_CAPTION_STREAM';

    /**
     * @param string $value
     * @return PassthroughMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Select the embedded captions from the video stream
     *
     * @return PassthroughMode
     */
    public static function VIDEO_STREAM()
    {
        return new PassthroughMode(self::VIDEO_STREAM);
    }

    /**
     * Select the captions from a separate caption stream
     *
     * @return PassthroughMode
     */
    public static function CAPTION_STREAM()
    {
        return new PassthroughMode(self::CAPTION_STREAM);
    }

    /**
     * Select the captions from the video stream or from the caption stream. Don&#39;t use this option if the input file contains both caption variants.
     *
     * @return PassthroughMode
     */
    public static function VIDEO_CAPTION_STREAM()
    {
        return new PassthroughMode(self::VIDEO_CAPTION_STREAM);
    }
}

