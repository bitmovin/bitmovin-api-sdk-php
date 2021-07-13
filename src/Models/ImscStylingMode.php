<?php

namespace BitmovinApiSdk\Models;

class ImscStylingMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PASSTHROUGH = 'PASSTHROUGH';

    /** @var string */
    private const DROP_STYLING = 'DROP_STYLING';

    /**
     * @param string $value
     * @return ImscStylingMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Keep the styling of the input file.
     *
     * @return ImscStylingMode
     */
    public static function PASSTHROUGH()
    {
        return new ImscStylingMode(self::PASSTHROUGH);
    }

    /**
     * Drop the styling of the input file.
     *
     * @return ImscStylingMode
     */
    public static function DROP_STYLING()
    {
        return new ImscStylingMode(self::DROP_STYLING);
    }
}

