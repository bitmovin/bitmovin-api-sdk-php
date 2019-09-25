<?php

namespace BitmovinApiSdk\Models;

class InputColorRange extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const UNSPECIFIED = 'UNSPECIFIED';

    /** @var string */
    private const MPEG = 'MPEG';

    /** @var string */
    private const JPEG = 'JPEG';

    /**
     * @param string $value
     * @return InputColorRange
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Override the color range detected in the input file. If not set the input color range will be automatically detected if possible.
     *
     * @return InputColorRange
     */
    public static function UNSPECIFIED()
    {
        return new InputColorRange(self::UNSPECIFIED);
    }

    /**
     * Override the color range detected in the input file. If not set the input color range will be automatically detected if possible.
     *
     * @return InputColorRange
     */
    public static function MPEG()
    {
        return new InputColorRange(self::MPEG);
    }

    /**
     * Override the color range detected in the input file. If not set the input color range will be automatically detected if possible.
     *
     * @return InputColorRange
     */
    public static function JPEG()
    {
        return new InputColorRange(self::JPEG);
    }
}

