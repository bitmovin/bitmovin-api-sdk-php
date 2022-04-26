<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingLiveJobOutputType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const URL = 'URL';

    /** @var string */
    private const CDN = 'CDN';

    /**
     * @param string $value
     * @return SimpleEncodingLiveJobOutputType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Output type
     *
     * @return SimpleEncodingLiveJobOutputType
     */
    public static function URL()
    {
        return new SimpleEncodingLiveJobOutputType(self::URL);
    }

    /**
     * Output type
     *
     * @return SimpleEncodingLiveJobOutputType
     */
    public static function CDN()
    {
        return new SimpleEncodingLiveJobOutputType(self::CDN);
    }
}

