<?php

namespace BitmovinApiSdk\Models;

class EncodingTemplateType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const VOD = 'VOD';

    /** @var string */
    private const LIVE = 'LIVE';

    /**
     * @param string $value
     * @return EncodingTemplateType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * VOD Encoding Template
     *
     * @return EncodingTemplateType
     */
    public static function VOD()
    {
        return new EncodingTemplateType(self::VOD);
    }

    /**
     * Live Encoding Template
     *
     * @return EncodingTemplateType
     */
    public static function LIVE()
    {
        return new EncodingTemplateType(self::LIVE);
    }
}

