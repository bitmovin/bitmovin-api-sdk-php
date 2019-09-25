<?php

namespace BitmovinApiSdk\Models;

class AesEncryptionMethod extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SAMPLE_AES = 'SAMPLE_AES';

    /** @var string */
    private const AES_128 = 'AES_128';

    /**
     * @param string $value
     * @return AesEncryptionMethod
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Detailed encryption method
     *
     * @return AesEncryptionMethod
     */
    public static function SAMPLE_AES()
    {
        return new AesEncryptionMethod(self::SAMPLE_AES);
    }

    /**
     * Detailed encryption method
     *
     * @return AesEncryptionMethod
     */
    public static function AES_128()
    {
        return new AesEncryptionMethod(self::AES_128);
    }
}

