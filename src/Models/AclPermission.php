<?php

namespace BitmovinApiSdk\Models;

class AclPermission extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PUBLIC_READ = 'PUBLIC_READ';

    /** @var string */
    private const _PRIVATE = 'PRIVATE';

    /**
     * @param string $value
     * @return AclPermission
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * PUBLIC_READ
     *
     * @return AclPermission
     */
    public static function PUBLIC_READ()
    {
        return new AclPermission(self::PUBLIC_READ);
    }

    /**
     * _PRIVATE
     *
     * @return AclPermission
     */
    public static function _PRIVATE()
    {
        return new AclPermission(self::_PRIVATE);
    }
}

