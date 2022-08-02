<?php

namespace BitmovinApiSdk\Models;

class StreamConditionsMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DROP_MUXING = 'DROP_MUXING';

    /** @var string */
    private const DROP_STREAM = 'DROP_STREAM';

    /**
     * @param string $value
     * @return StreamConditionsMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The whole muxing will be ignored if at least one of its Streams is ignored
     *
     * @return StreamConditionsMode
     */
    public static function DROP_MUXING()
    {
        return new StreamConditionsMode(self::DROP_MUXING);
    }

    /**
     * Ignored Streams will be omitted from the muxing. The muxing will only be ignored if all of its Streams are ignored
     *
     * @return StreamConditionsMode
     */
    public static function DROP_STREAM()
    {
        return new StreamConditionsMode(self::DROP_STREAM);
    }
}

