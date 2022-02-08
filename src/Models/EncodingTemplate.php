<?php

namespace BitmovinApiSdk\Models;

class EncodingTemplate extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const H264 = 'H264';

    /** @var string */
    private const AV1 = 'AV1';

    /**
     * @param string $value
     * @return EncodingTemplate
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * H264
     *
     * @return EncodingTemplate
     */
    public static function H264()
    {
        return new EncodingTemplate(self::H264);
    }

    /**
     * AV1
     *
     * @return EncodingTemplate
     */
    public static function AV1()
    {
        return new EncodingTemplate(self::AV1);
    }
}

