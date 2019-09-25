<?php

namespace BitmovinApiSdk\Models;

class DeinterlaceFrameSelectionMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ALL = 'ALL';

    /** @var string */
    private const INTERLACED = 'INTERLACED';

    /**
     * @param string $value
     * @return DeinterlaceFrameSelectionMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Deinterlace all frames
     *
     * @return DeinterlaceFrameSelectionMode
     */
    public static function ALL()
    {
        return new DeinterlaceFrameSelectionMode(self::ALL);
    }

    /**
     * Only deinterlace frames marked as interlaced. This option is only supported for deinterlace modes &#39;FRAME&#39; and &#39;FRAME_NOSPATIAL&#39;
     *
     * @return DeinterlaceFrameSelectionMode
     */
    public static function INTERLACED()
    {
        return new DeinterlaceFrameSelectionMode(self::INTERLACED);
    }
}

