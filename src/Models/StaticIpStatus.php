<?php

namespace BitmovinApiSdk\Models;

class StaticIpStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CREATING = 'CREATING';

    /** @var string */
    private const UNUSED = 'UNUSED';

    /** @var string */
    private const ERROR = 'ERROR';

    /** @var string */
    private const USED = 'USED';

    /**
     * @param string $value
     * @return StaticIpStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * CREATING
     *
     * @return StaticIpStatus
     */
    public static function CREATING()
    {
        return new StaticIpStatus(self::CREATING);
    }

    /**
     * UNUSED
     *
     * @return StaticIpStatus
     */
    public static function UNUSED()
    {
        return new StaticIpStatus(self::UNUSED);
    }

    /**
     * ERROR
     *
     * @return StaticIpStatus
     */
    public static function ERROR()
    {
        return new StaticIpStatus(self::ERROR);
    }

    /**
     * USED
     *
     * @return StaticIpStatus
     */
    public static function USED()
    {
        return new StaticIpStatus(self::USED);
    }
}

