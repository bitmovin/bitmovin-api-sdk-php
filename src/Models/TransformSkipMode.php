<?php

namespace BitmovinApiSdk\Models;

class TransformSkipMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const NORMAL = 'NORMAL';

    /** @var string */
    private const FAST = 'FAST';

    /**
     * @param string $value
     * @return TransformSkipMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * No transform skip enabled
     *
     * @return TransformSkipMode
     */
    public static function NONE()
    {
        return new TransformSkipMode(self::NONE);
    }

    /**
     * Enable normal evaluation of transform skip
     *
     * @return TransformSkipMode
     */
    public static function NORMAL()
    {
        return new TransformSkipMode(self::NORMAL);
    }

    /**
     * Only evaluate transform skip for NxN intra predictions (4x4 blocks).
     *
     * @return TransformSkipMode
     */
    public static function FAST()
    {
        return new TransformSkipMode(self::FAST);
    }
}

