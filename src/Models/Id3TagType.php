<?php

namespace BitmovinApiSdk\Models;

class Id3TagType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const RAW = 'RAW';

    /** @var string */
    private const FRAME_ID = 'FRAME_ID';

    /** @var string */
    private const PLAIN_TEXT = 'PLAIN_TEXT';

    /**
     * @param string $value
     * @return Id3TagType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * RAW
     *
     * @return Id3TagType
     */
    public static function RAW()
    {
        return new Id3TagType(self::RAW);
    }

    /**
     * FRAME_ID
     *
     * @return Id3TagType
     */
    public static function FRAME_ID()
    {
        return new Id3TagType(self::FRAME_ID);
    }

    /**
     * PLAIN_TEXT
     *
     * @return Id3TagType
     */
    public static function PLAIN_TEXT()
    {
        return new Id3TagType(self::PLAIN_TEXT);
    }
}

