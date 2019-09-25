<?php

namespace BitmovinApiSdk\Models;

class ResponseStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SUCCESS = 'SUCCESS';

    /** @var string */
    private const ERROR = 'ERROR';

    /**
     * @param string $value
     * @return ResponseStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * SUCCESS
     *
     * @return ResponseStatus
     */
    public static function SUCCESS()
    {
        return new ResponseStatus(self::SUCCESS);
    }

    /**
     * ERROR
     *
     * @return ResponseStatus
     */
    public static function ERROR()
    {
        return new ResponseStatus(self::ERROR);
    }
}

