<?php

namespace BitmovinApiSdk\Models;

class Id3TagPositionMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const TIME = 'TIME';

    /** @var string */
    private const FRAME = 'FRAME';

    /**
     * @param string $value
     * @return Id3TagPositionMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * TIME
     *
     * @return Id3TagPositionMode
     */
    public static function TIME()
    {
        return new Id3TagPositionMode(self::TIME);
    }

    /**
     * FRAME
     *
     * @return Id3TagPositionMode
     */
    public static function FRAME()
    {
        return new Id3TagPositionMode(self::FRAME);
    }
}

