<?php

namespace BitmovinApiSdk\Models;

class AspectMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PAD = 'PAD';

    /** @var string */
    private const CROP = 'CROP';

    /** @var string */
    private const STRETCH = 'STRETCH';

    /**
     * @param string $value
     * @return AspectMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Specifies that the Padding aspect mode is used when adapting to the main input stream&#39;s aspect ratio (Adding black boxes on the bottom/top or left/right).
     *
     * @return AspectMode
     */
    public static function PAD()
    {
        return new AspectMode(self::PAD);
    }

    /**
     * Specifies that the Cropping aspect mode is used when adapting to the main input stream&#39;s aspect ratio (Cropping on the left/right or bottom/top).
     *
     * @return AspectMode
     */
    public static function CROP()
    {
        return new AspectMode(self::CROP);
    }

    /**
     * Specifies that the Stretching aspect mode is used when adapting to the main input stream&#39;s aspect ratio (Stretching vertically or horizontally).
     *
     * @return AspectMode
     */
    public static function STRETCH()
    {
        return new AspectMode(self::STRETCH);
    }
}

