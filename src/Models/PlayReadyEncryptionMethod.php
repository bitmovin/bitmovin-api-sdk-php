<?php

namespace BitmovinApiSdk\Models;

class PlayReadyEncryptionMethod extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MPEG_CENC = 'MPEG_CENC';

    /** @var string */
    private const PIFF_CTR = 'PIFF_CTR';

    /**
     * @param string $value
     * @return PlayReadyEncryptionMethod
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Encryption method
     *
     * @return PlayReadyEncryptionMethod
     */
    public static function MPEG_CENC()
    {
        return new PlayReadyEncryptionMethod(self::MPEG_CENC);
    }

    /**
     * Encryption method
     *
     * @return PlayReadyEncryptionMethod
     */
    public static function PIFF_CTR()
    {
        return new PlayReadyEncryptionMethod(self::PIFF_CTR);
    }
}

