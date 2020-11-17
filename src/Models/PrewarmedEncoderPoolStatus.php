<?php

namespace BitmovinApiSdk\Models;

class PrewarmedEncoderPoolStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const STARTED = 'STARTED';

    /** @var string */
    private const STOPPED = 'STOPPED';

    /**
     * @param string $value
     * @return PrewarmedEncoderPoolStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * STARTED means that the pool is currently running
     *
     * @return PrewarmedEncoderPoolStatus
     */
    public static function STARTED()
    {
        return new PrewarmedEncoderPoolStatus(self::STARTED);
    }

    /**
     * STOPPED means that the pool is currently not running and cannot be used
     *
     * @return PrewarmedEncoderPoolStatus
     */
    public static function STOPPED()
    {
        return new PrewarmedEncoderPoolStatus(self::STOPPED);
    }
}

