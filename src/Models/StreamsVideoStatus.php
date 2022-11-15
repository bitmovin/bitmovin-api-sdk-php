<?php

namespace BitmovinApiSdk\Models;

class StreamsVideoStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PUBLISHED = 'PUBLISHED';

    /** @var string */
    private const UNPUBLISHED = 'UNPUBLISHED';

    /**
     * @param string $value
     * @return StreamsVideoStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The stream is published and can be accessed
     *
     * @return StreamsVideoStatus
     */
    public static function PUBLISHED()
    {
        return new StreamsVideoStatus(self::PUBLISHED);
    }

    /**
     * The stream cannot be accessed
     *
     * @return StreamsVideoStatus
     */
    public static function UNPUBLISHED()
    {
        return new StreamsVideoStatus(self::UNPUBLISHED);
    }
}

