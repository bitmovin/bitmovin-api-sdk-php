<?php

namespace BitmovinApiSdk\Models;

class LiveEncodingCodec extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const H264 = 'H264';

    /** @var string */
    private const H265 = 'H265';

    /** @var string */
    private const AAC = 'AAC';

    /**
     * @param string $value
     * @return LiveEncodingCodec
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * H264
     *
     * @return LiveEncodingCodec
     */
    public static function H264()
    {
        return new LiveEncodingCodec(self::H264);
    }

    /**
     * H265
     *
     * @return LiveEncodingCodec
     */
    public static function H265()
    {
        return new LiveEncodingCodec(self::H265);
    }

    /**
     * AAC
     *
     * @return LiveEncodingCodec
     */
    public static function AAC()
    {
        return new LiveEncodingCodec(self::AAC);
    }
}

