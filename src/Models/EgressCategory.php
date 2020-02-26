<?php

namespace BitmovinApiSdk\Models;

class EgressCategory extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const TRANSFER_RETRY = 'TRANSFER_RETRY';

    /** @var string */
    private const TRANSFER = 'TRANSFER';

    /**
     * @param string $value
     * @return EgressCategory
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * TRANSFER_RETRY
     *
     * @return EgressCategory
     */
    public static function TRANSFER_RETRY()
    {
        return new EgressCategory(self::TRANSFER_RETRY);
    }

    /**
     * TRANSFER
     *
     * @return EgressCategory
     */
    public static function TRANSFER()
    {
        return new EgressCategory(self::TRANSFER);
    }
}

