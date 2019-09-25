<?php

namespace BitmovinApiSdk\Models;

class H264BPyramid extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const STRICT = 'STRICT';

    /** @var string */
    private const NORMAL = 'NORMAL';

    /**
     * @param string $value
     * @return H264BPyramid
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Do not keep b-frame references
     *
     * @return H264BPyramid
     */
    public static function NONE()
    {
        return new H264BPyramid(self::NONE);
    }

    /**
     * Use a strictly hierarchical pyramid
     *
     * @return H264BPyramid
     */
    public static function STRICT()
    {
        return new H264BPyramid(self::STRICT);
    }

    /**
     * Non-strict, recommended (increases decoding picture buffer)
     *
     * @return H264BPyramid
     */
    public static function NORMAL()
    {
        return new H264BPyramid(self::NORMAL);
    }
}

