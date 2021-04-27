<?php

namespace BitmovinApiSdk\Models;

class WebVttStylingMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PASSTHROUGH = 'PASSTHROUGH';

    /** @var string */
    private const DROP_STYLING = 'DROP_STYLING';

    /**
     * @param string $value
     * @return WebVttStylingMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Keep the styling of the input file.
     *
     * @return WebVttStylingMode
     */
    public static function PASSTHROUGH()
    {
        return new WebVttStylingMode(self::PASSTHROUGH);
    }

    /**
     * Drop the styling of the input file.
     *
     * @return WebVttStylingMode
     */
    public static function DROP_STYLING()
    {
        return new WebVttStylingMode(self::DROP_STYLING);
    }
}

