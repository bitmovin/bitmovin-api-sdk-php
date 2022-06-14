<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingVodJobInputSourceType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const URL = 'URL';

    /** @var string */
    private const DIRECT_FILE_UPLOAD = 'DIRECT_FILE_UPLOAD';

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

    /**
     * Input source type
     *
     * @return SimpleEncodingVodJobInputSourceType
     */
    public static function DIRECT_FILE_UPLOAD()
    {
        return new SimpleEncodingVodJobInputSourceType(self::DIRECT_FILE_UPLOAD);
    }
}

