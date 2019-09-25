<?php

namespace BitmovinApiSdk\Models;

class TransferVersion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const _DEFAULT = 'DEFAULT';

    /** @var string */
    private const POOL = 'POOL';

    /**
     * @param string $value
     * @return TransferVersion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * _DEFAULT
     *
     * @return TransferVersion
     */
    public static function _DEFAULT()
    {
        return new TransferVersion(self::_DEFAULT);
    }

    /**
     * POOL
     *
     * @return TransferVersion
     */
    public static function POOL()
    {
        return new TransferVersion(self::POOL);
    }
}

