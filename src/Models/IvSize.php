<?php

namespace BitmovinApiSdk\Models;

class IvSize extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const IV_8_BYTES = '8_BYTES';

    /** @var string */
    private const IV_16_BYTES = '16_BYTES';

    /**
     * @param string $value
     * @return IvSize
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Define initialization vector to have a size of 8 bytes
     *
     * @return IvSize
     */
    public static function IV_8_BYTES()
    {
        return new IvSize(self::IV_8_BYTES);
    }

    /**
     * Define initialization vector to have a size of 16 bytes
     *
     * @return IvSize
     */
    public static function IV_16_BYTES()
    {
        return new IvSize(self::IV_16_BYTES);
    }
}

