<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingVodJobOutputType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const URL = 'URL';

    /** @var string */
    private const CDN = 'CDN';

    /**
     * @param string $value
     * @return SimpleEncodingVodJobOutputType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Output type
     *
     * @return SimpleEncodingVodJobOutputType
     */
    public static function URL()
    {
        return new SimpleEncodingVodJobOutputType(self::URL);
    }

    /**
     * Output type
     *
     * @return SimpleEncodingVodJobOutputType
     */
    public static function CDN()
    {
        return new SimpleEncodingVodJobOutputType(self::CDN);
    }
}

