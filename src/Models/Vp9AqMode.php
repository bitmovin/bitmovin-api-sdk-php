<?php

namespace BitmovinApiSdk\Models;

class Vp9AqMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const VARIANCE = 'VARIANCE';

    /** @var string */
    private const COMPLEXITY = 'COMPLEXITY';

    /** @var string */
    private const CYCLIC = 'CYCLIC';

    /**
     * @param string $value
     * @return Vp9AqMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Adaptive quantization mode.
     *
     * @return Vp9AqMode
     */
    public static function NONE()
    {
        return new Vp9AqMode(self::NONE);
    }

    /**
     * Adaptive quantization mode.
     *
     * @return Vp9AqMode
     */
    public static function VARIANCE()
    {
        return new Vp9AqMode(self::VARIANCE);
    }

    /**
     * Adaptive quantization mode.
     *
     * @return Vp9AqMode
     */
    public static function COMPLEXITY()
    {
        return new Vp9AqMode(self::COMPLEXITY);
    }

    /**
     * Adaptive quantization mode.
     *
     * @return Vp9AqMode
     */
    public static function CYCLIC()
    {
        return new Vp9AqMode(self::CYCLIC);
    }
}

