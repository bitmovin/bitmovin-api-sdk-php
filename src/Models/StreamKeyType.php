<?php

namespace BitmovinApiSdk\Models;

class StreamKeyType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const RESERVED = 'RESERVED';

    /** @var string */
    private const TEMPORARY = 'TEMPORARY';

    /**
     * @param string $value
     * @return StreamKeyType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Stream key is persistent and can be reused. It can be assigned to a live encoding when it is currently not in use
     *
     * @return StreamKeyType
     */
    public static function RESERVED()
    {
        return new StreamKeyType(self::RESERVED);
    }

    /**
     * Stream key is automatically generated for a live encoding. They can not be reused. After the encoding is finished, the stream key will be gone also
     *
     * @return StreamKeyType
     */
    public static function TEMPORARY()
    {
        return new StreamKeyType(self::TEMPORARY);
    }
}

