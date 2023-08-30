<?php

namespace BitmovinApiSdk\Models;

class StreamsTrimmingStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const UNAVAILABLE = 'UNAVAILABLE';

    /** @var string */
    private const AVAILABLE = 'AVAILABLE';

    /** @var string */
    private const STARTED = 'STARTED';

    /** @var string */
    private const ERROR = 'ERROR';

    /** @var string */
    private const FINISHED = 'FINISHED';

    /**
     * @param string $value
     * @return StreamsTrimmingStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Trimming is unavailable
     *
     * @return StreamsTrimmingStatus
     */
    public static function UNAVAILABLE()
    {
        return new StreamsTrimmingStatus(self::UNAVAILABLE);
    }

    /**
     * Trimming is available
     *
     * @return StreamsTrimmingStatus
     */
    public static function AVAILABLE()
    {
        return new StreamsTrimmingStatus(self::AVAILABLE);
    }

    /**
     * The trimming started
     *
     * @return StreamsTrimmingStatus
     */
    public static function STARTED()
    {
        return new StreamsTrimmingStatus(self::STARTED);
    }

    /**
     * The trimming failed
     *
     * @return StreamsTrimmingStatus
     */
    public static function ERROR()
    {
        return new StreamsTrimmingStatus(self::ERROR);
    }

    /**
     * The trimming succeeded
     *
     * @return StreamsTrimmingStatus
     */
    public static function FINISHED()
    {
        return new StreamsTrimmingStatus(self::FINISHED);
    }
}

