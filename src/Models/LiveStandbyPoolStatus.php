<?php

namespace BitmovinApiSdk\Models;

class LiveStandbyPoolStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const HEALTHY = 'HEALTHY';

    /** @var string */
    private const ERROR = 'ERROR';

    /**
     * @param string $value
     * @return LiveStandbyPoolStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The standby pool is in healthy state
     *
     * @return LiveStandbyPoolStatus
     */
    public static function HEALTHY()
    {
        return new LiveStandbyPoolStatus(self::HEALTHY);
    }

    /**
     * The standby pool is in error state
     *
     * @return LiveStandbyPoolStatus
     */
    public static function ERROR()
    {
        return new LiveStandbyPoolStatus(self::ERROR);
    }
}

