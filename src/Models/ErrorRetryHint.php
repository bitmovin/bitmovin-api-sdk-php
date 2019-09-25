<?php

namespace BitmovinApiSdk\Models;

class ErrorRetryHint extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const RETRY = 'RETRY';

    /** @var string */
    private const NO_RETRY = 'NO_RETRY';

    /** @var string */
    private const RETRY_IN_DIFFERENT_REGION = 'RETRY_IN_DIFFERENT_REGION';

    /**
     * @param string $value
     * @return ErrorRetryHint
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * RETRY
     *
     * @return ErrorRetryHint
     */
    public static function RETRY()
    {
        return new ErrorRetryHint(self::RETRY);
    }

    /**
     * NO_RETRY
     *
     * @return ErrorRetryHint
     */
    public static function NO_RETRY()
    {
        return new ErrorRetryHint(self::NO_RETRY);
    }

    /**
     * RETRY_IN_DIFFERENT_REGION
     *
     * @return ErrorRetryHint
     */
    public static function RETRY_IN_DIFFERENT_REGION()
    {
        return new ErrorRetryHint(self::RETRY_IN_DIFFERENT_REGION);
    }
}

