<?php

namespace BitmovinApiSdk\Models;

class LiveOptionsType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const HD = 'HD';

    /**
     * @param string $value
     * @return LiveOptionsType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * HD option live encoding
     *
     * @return LiveOptionsType
     */
    public static function HD()
    {
        return new LiveOptionsType(self::HD);
    }
}

