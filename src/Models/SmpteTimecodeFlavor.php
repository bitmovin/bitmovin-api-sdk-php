<?php

namespace BitmovinApiSdk\Models;

class SmpteTimecodeFlavor extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AUTO = 'AUTO';

    /** @var string */
    private const NON_DROP_FRAME = 'NON_DROP_FRAME';

    /** @var string */
    private const DROP_FRAME = 'DROP_FRAME';

    /**
     * @param string $value
     * @return SmpteTimecodeFlavor
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Automatically detect the flavor of timecodes depending on the separation character between seconds and frames (&quot;:&quot; meaning NON_DROP_FRAME, &quot;;&quot; or &quot;.&quot; meaning DROP_FRAME)
     *
     * @return SmpteTimecodeFlavor
     */
    public static function AUTO()
    {
        return new SmpteTimecodeFlavor(self::AUTO);
    }

    /**
     * Interpret timecodes as non-drop frame (NDF or wall-clock time) timecodes
     *
     * @return SmpteTimecodeFlavor
     */
    public static function NON_DROP_FRAME()
    {
        return new SmpteTimecodeFlavor(self::NON_DROP_FRAME);
    }

    /**
     * Interpret timecodes as drop-frame (DF) timecodes
     *
     * @return SmpteTimecodeFlavor
     */
    public static function DROP_FRAME()
    {
        return new SmpteTimecodeFlavor(self::DROP_FRAME);
    }
}

