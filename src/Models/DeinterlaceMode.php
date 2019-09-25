<?php

namespace BitmovinApiSdk\Models;

class DeinterlaceMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const FRAME = 'FRAME';

    /** @var string */
    private const FIELD = 'FIELD';

    /** @var string */
    private const FRAME_NOSPATIAL = 'FRAME_NOSPATIAL';

    /** @var string */
    private const FIELD_NOSPATIAL = 'FIELD_NOSPATIAL';

    /**
     * @param string $value
     * @return DeinterlaceMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Generate one frame for each frame
     *
     * @return DeinterlaceMode
     */
    public static function FRAME()
    {
        return new DeinterlaceMode(self::FRAME);
    }

    /**
     * Generate one frame for each field
     *
     * @return DeinterlaceMode
     */
    public static function FIELD()
    {
        return new DeinterlaceMode(self::FIELD);
    }

    /**
     * Like FRAME, but skip the spatial interlacing check
     *
     * @return DeinterlaceMode
     */
    public static function FRAME_NOSPATIAL()
    {
        return new DeinterlaceMode(self::FRAME_NOSPATIAL);
    }

    /**
     * Like FIELD, but skip the spatial interlacing check
     *
     * @return DeinterlaceMode
     */
    public static function FIELD_NOSPATIAL()
    {
        return new DeinterlaceMode(self::FIELD_NOSPATIAL);
    }
}

