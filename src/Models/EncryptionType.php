<?php

namespace BitmovinApiSdk\Models;

class EncryptionType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AES = 'AES';

    /** @var string */
    private const DE_SEDE = 'DESede';

    /** @var string */
    private const BLOWFISH = 'Blowfish';

    /** @var string */
    private const RSA = 'RSA';

    /**
     * @param string $value
     * @return EncryptionType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * AES
     *
     * @return EncryptionType
     */
    public static function AES()
    {
        return new EncryptionType(self::AES);
    }

    /**
     * DE_SEDE
     *
     * @return EncryptionType
     */
    public static function DE_SEDE()
    {
        return new EncryptionType(self::DE_SEDE);
    }

    /**
     * BLOWFISH
     *
     * @return EncryptionType
     */
    public static function BLOWFISH()
    {
        return new EncryptionType(self::BLOWFISH);
    }

    /**
     * RSA
     *
     * @return EncryptionType
     */
    public static function RSA()
    {
        return new EncryptionType(self::RSA);
    }
}

