<?php

namespace BitmovinApiSdk\Models;

class IgnoredBy extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CONDITION = 'CONDITION';

    /**
     * @param string $value
     * @return IgnoredBy
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * CONDITION
     *
     * @return IgnoredBy
     */
    public static function CONDITION()
    {
        return new IgnoredBy(self::CONDITION);
    }
}

