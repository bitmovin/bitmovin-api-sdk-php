<?php

namespace BitmovinApiSdk\Models;

class BitmovinStreamStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PUBLISHED = 'PUBLISHED';

    /** @var string */
    private const UNPUBLISHED = 'UNPUBLISHED';

    /**
     * @param string $value
     * @return BitmovinStreamStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The Stream is published and can be accessed
     *
     * @return BitmovinStreamStatus
     */
    public static function PUBLISHED()
    {
        return new BitmovinStreamStatus(self::PUBLISHED);
    }

    /**
     * The Stream can&#39;t be accessed
     *
     * @return BitmovinStreamStatus
     */
    public static function UNPUBLISHED()
    {
        return new BitmovinStreamStatus(self::UNPUBLISHED);
    }
}

