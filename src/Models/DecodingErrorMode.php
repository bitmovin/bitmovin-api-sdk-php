<?php

namespace BitmovinApiSdk\Models;

class DecodingErrorMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const FAIL_ON_ERROR = 'FAIL_ON_ERROR';

    /** @var string */
    private const DUPLICATE_FRAMES = 'DUPLICATE_FRAMES';

    /**
     * @param string $value
     * @return DecodingErrorMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Encoding will fail, if there are errors during decoding of this stream
     *
     * @return DecodingErrorMode
     */
    public static function FAIL_ON_ERROR()
    {
        return new DecodingErrorMode(self::FAIL_ON_ERROR);
    }

    /**
     * If a frame is undecodable, other frames will be duplicated to compensate for the lost frame. The encoding will not fail, but there will be warnings about which frames could not be decoded.
     *
     * @return DecodingErrorMode
     */
    public static function DUPLICATE_FRAMES()
    {
        return new DecodingErrorMode(self::DUPLICATE_FRAMES);
    }
}

