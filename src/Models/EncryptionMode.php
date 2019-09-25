<?php

namespace BitmovinApiSdk\Models;

class EncryptionMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CTR = 'CTR';

    /** @var string */
    private const CBC = 'CBC';

    /**
     * @param string $value
     * @return EncryptionMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The encryption method to use.
     *
     * @return EncryptionMode
     */
    public static function CTR()
    {
        return new EncryptionMode(self::CTR);
    }

    /**
     * The encryption method to use.
     *
     * @return EncryptionMode
     */
    public static function CBC()
    {
        return new EncryptionMode(self::CBC);
    }
}

