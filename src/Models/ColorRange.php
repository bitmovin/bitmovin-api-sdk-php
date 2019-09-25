<?php

namespace BitmovinApiSdk\Models;

class ColorRange extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const UNSPECIFIED = 'UNSPECIFIED';

    /** @var string */
    private const MPEG = 'MPEG';

    /** @var string */
    private const JPEG = 'JPEG';

    /**
     * @param string $value
     * @return ColorRange
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The color range to be applied
     *
     * @return ColorRange
     */
    public static function UNSPECIFIED()
    {
        return new ColorRange(self::UNSPECIFIED);
    }

    /**
     * The color range to be applied
     *
     * @return ColorRange
     */
    public static function MPEG()
    {
        return new ColorRange(self::MPEG);
    }

    /**
     * The color range to be applied
     *
     * @return ColorRange
     */
    public static function JPEG()
    {
        return new ColorRange(self::JPEG);
    }
}

