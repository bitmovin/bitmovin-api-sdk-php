<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingVodJobInputSourceType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const URL = 'URL';

    /**
     * @param string $value
     * @return SimpleEncodingVodJobInputSourceType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Input source type
     *
     * @return SimpleEncodingVodJobInputSourceType
     */
    public static function URL()
    {
        return new SimpleEncodingVodJobInputSourceType(self::URL);
    }
}

