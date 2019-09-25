<?php

namespace BitmovinApiSdk\Models;

class SignatureType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const HMAC = 'HMAC';

    /**
     * @param string $value
     * @return SignatureType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * HMAC
     *
     * @return SignatureType
     */
    public static function HMAC()
    {
        return new SignatureType(self::HMAC);
    }
}

