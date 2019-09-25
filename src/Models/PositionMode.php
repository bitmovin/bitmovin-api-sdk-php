<?php

namespace BitmovinApiSdk\Models;

class PositionMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const KEYFRAME = 'KEYFRAME';

    /** @var string */
    private const TIME = 'TIME';

    /** @var string */
    private const SEGMENT = 'SEGMENT';

    /**
     * @param string $value
     * @return PositionMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The custom tag will be inserted in the manifest at a certain keyframe id and segment cut. (https://bitmovin.com/encoding-documentation/bitmovin-api/#/reference/encoding/encodings/create-keyframes)
     *
     * @return PositionMode
     */
    public static function KEYFRAME()
    {
        return new PositionMode(self::KEYFRAME);
    }

    /**
     * The custom tag will be inserted before the segment that is closest to that time (in seconds).
     *
     * @return PositionMode
     */
    public static function TIME()
    {
        return new PositionMode(self::TIME);
    }

    /**
     * The custom tag will be inserted before the specified segment number.
     *
     * @return PositionMode
     */
    public static function SEGMENT()
    {
        return new PositionMode(self::SEGMENT);
    }
}

