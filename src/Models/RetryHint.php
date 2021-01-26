<?php

namespace BitmovinApiSdk\Models;

class RetryHint extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const RETRY = 'RETRY';

    /** @var string */
    private const RETRY_IN_DIFFERENT_REGION = 'RETRY_IN_DIFFERENT_REGION';

    /** @var string */
    private const NO_RETRY = 'NO_RETRY';

    /** @var string */
    private const UNDEFINED = 'UNDEFINED';

    /**
     * @param string $value
     * @return RetryHint
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The process may succeed when retrying
     *
     * @return RetryHint
     */
    public static function RETRY()
    {
        return new RetryHint(self::RETRY);
    }

    /**
     * The process may succeed when retrying in another region
     *
     * @return RetryHint
     */
    public static function RETRY_IN_DIFFERENT_REGION()
    {
        return new RetryHint(self::RETRY_IN_DIFFERENT_REGION);
    }

    /**
     * The process is expected to fail on subsequent retries
     *
     * @return RetryHint
     */
    public static function NO_RETRY()
    {
        return new RetryHint(self::NO_RETRY);
    }

    /**
     * Unable to determine if the error is retryable.
     *
     * @return RetryHint
     */
    public static function UNDEFINED()
    {
        return new RetryHint(self::UNDEFINED);
    }
}

