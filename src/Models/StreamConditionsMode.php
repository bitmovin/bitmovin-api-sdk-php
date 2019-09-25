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
     * The whole muxing will be omitted if one or more of its stream conditions are not fulfilled
     *
     * @return StreamConditionsMode
     */
    public static function DROP_MUXING()
    {
        return new StreamConditionsMode(self::DROP_MUXING);
    }

    /**
     * Streams not fulfilling the stream conditions will be omitted from the muxing. The muxing will be omitted if there is no stream meeting the conditions.
     *
     * @return StreamConditionsMode
     */
    public static function DROP_STREAM()
    {
        return new StreamConditionsMode(self::DROP_STREAM);
    }
}

