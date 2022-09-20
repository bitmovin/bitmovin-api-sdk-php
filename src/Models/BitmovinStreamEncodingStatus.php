<?php

namespace BitmovinApiSdk\Models;

class BitmovinStreamEncodingStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const STARTED = 'STARTED';

    /** @var string */
    private const ERROR = 'ERROR';

    /** @var string */
    private const FINISHED = 'FINISHED';

    /**
     * @param string $value
     * @return BitmovinStreamEncodingStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The encoding has been started and is in progress
     *
     * @return BitmovinStreamEncodingStatus
     */
    public static function STARTED()
    {
        return new BitmovinStreamEncodingStatus(self::STARTED);
    }

    /**
     * The encoding did not succeed
     *
     * @return BitmovinStreamEncodingStatus
     */
    public static function ERROR()
    {
        return new BitmovinStreamEncodingStatus(self::ERROR);
    }

    /**
     * The encoding finished successfully
     *
     * @return BitmovinStreamEncodingStatus
     */
    public static function FINISHED()
    {
        return new BitmovinStreamEncodingStatus(self::FINISHED);
    }
}

