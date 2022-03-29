<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingVodJobOutputType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const URL = 'URL';

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
}

