<?php

namespace BitmovinApiSdk\Models;

class SpriteCreationMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const INTERVAL_END = 'INTERVAL_END';

    /** @var string */
    private const INTERVAL_START = 'INTERVAL_START';

    /**
     * @param string $value
     * @return SpriteCreationMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Creation of the thumbnails starts after the first period interval configured.  When using distance&#x3D;10 and unit&#x3D;SECONDS, the first image of the sprite is from second 10 of the video.
     *
     * @return SpriteCreationMode
     */
    public static function INTERVAL_END()
    {
        return new SpriteCreationMode(self::INTERVAL_END);
    }

    /**
     * Creation of the thumbnails starts at the beginning of the first period interval configured, therefore, at the beginning of the video.  When using distance&#x3D;10 and unit&#x3D;SECONDS, the first image of the sprite is from the very start of the video, while the second image is from second 10 of the video.
     *
     * @return SpriteCreationMode
     */
    public static function INTERVAL_START()
    {
        return new SpriteCreationMode(self::INTERVAL_START);
    }
}

