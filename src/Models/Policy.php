<?php

namespace BitmovinApiSdk\Models;

class Policy extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ALLOW = 'ALLOW';

    /** @var string */
    private const DENY = 'DENY';

    /**
     * @param string $value
     * @return Policy
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Allows access to given permissions.
     *
     * @return Policy
     */
    public static function ALLOW()
    {
        return new Policy(self::ALLOW);
    }

    /**
     * Denies access to given permissions.
     *
     * @return Policy
     */
    public static function DENY()
    {
        return new Policy(self::DENY);
    }
}

