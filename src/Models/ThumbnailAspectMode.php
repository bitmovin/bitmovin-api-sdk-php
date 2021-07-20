<?php

namespace BitmovinApiSdk\Models;

class ThumbnailAspectMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PAD = 'PAD';

    /** @var string */
    private const CROP = 'CROP';

    /** @var string */
    private const STRETCH = 'STRETCH';

    /**
     * @param string $value
     * @return ThumbnailAspectMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Specifies that the Padding aspect mode is used when adapting to configured the width and height.  Padding means that either horiziontally or vertically black boxes are added to make sure that the thumbnail image fits the aspect ratio.
     *
     * @return ThumbnailAspectMode
     */
    public static function PAD()
    {
        return new ThumbnailAspectMode(self::PAD);
    }

    /**
     * Specifies that the Cropping aspect mode is used when adapting to configured the width and height.  Cropping means that parts of the image are removed so that the thumbnail fits the aspect ratio.
     *
     * @return ThumbnailAspectMode
     */
    public static function CROP()
    {
        return new ThumbnailAspectMode(self::CROP);
    }

    /**
     * Specifies that the Stretching aspect mode is used when adapting to configured the width and height.  Stretching means that the image is stretched either vertically or horizontally until it fits the aspect ratio.
     *
     * @return ThumbnailAspectMode
     */
    public static function STRETCH()
    {
        return new ThumbnailAspectMode(self::STRETCH);
    }
}

