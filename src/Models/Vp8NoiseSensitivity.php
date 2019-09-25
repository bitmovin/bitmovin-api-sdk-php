<?php

namespace BitmovinApiSdk\Models;

class Vp8NoiseSensitivity extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const OFF = 'OFF';

    /** @var string */
    private const ON_Y_ONLY = 'ON_Y_ONLY';

    /** @var string */
    private const ON_YUV = 'ON_YUV';

    /** @var string */
    private const ON_YUV_AGGRESSIVE = 'ON_YUV_AGGRESSIVE';

    /** @var string */
    private const ADAPTIVE = 'ADAPTIVE';

    /**
     * @param string $value
     * @return Vp8NoiseSensitivity
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Noise sensitivity (frames to blur).
     *
     * @return Vp8NoiseSensitivity
     */
    public static function OFF()
    {
        return new Vp8NoiseSensitivity(self::OFF);
    }

    /**
     * Noise sensitivity (frames to blur).
     *
     * @return Vp8NoiseSensitivity
     */
    public static function ON_Y_ONLY()
    {
        return new Vp8NoiseSensitivity(self::ON_Y_ONLY);
    }

    /**
     * Noise sensitivity (frames to blur).
     *
     * @return Vp8NoiseSensitivity
     */
    public static function ON_YUV()
    {
        return new Vp8NoiseSensitivity(self::ON_YUV);
    }

    /**
     * Noise sensitivity (frames to blur).
     *
     * @return Vp8NoiseSensitivity
     */
    public static function ON_YUV_AGGRESSIVE()
    {
        return new Vp8NoiseSensitivity(self::ON_YUV_AGGRESSIVE);
    }

    /**
     * Noise sensitivity (frames to blur).
     *
     * @return Vp8NoiseSensitivity
     */
    public static function ADAPTIVE()
    {
        return new Vp8NoiseSensitivity(self::ADAPTIVE);
    }
}

