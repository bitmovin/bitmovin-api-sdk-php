<?php

namespace BitmovinApiSdk\Models;

class QuantizationGroupSize extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const QGS_8x8 = 'QGS_8x8';

    /** @var string */
    private const QGS_16x16 = 'QGS_16x16';

    /** @var string */
    private const QGS_32x32 = 'QGS_32x32';

    /** @var string */
    private const QGS_64x64 = 'QGS_64x64';

    /**
     * @param string $value
     * @return QuantizationGroupSize
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * 8x8
     *
     * @return QuantizationGroupSize
     */
    public static function QGS_8x8()
    {
        return new QuantizationGroupSize(self::QGS_8x8);
    }

    /**
     * 16x16
     *
     * @return QuantizationGroupSize
     */
    public static function QGS_16x16()
    {
        return new QuantizationGroupSize(self::QGS_16x16);
    }

    /**
     * 32x32
     *
     * @return QuantizationGroupSize
     */
    public static function QGS_32x32()
    {
        return new QuantizationGroupSize(self::QGS_32x32);
    }

    /**
     * 64x64
     *
     * @return QuantizationGroupSize
     */
    public static function QGS_64x64()
    {
        return new QuantizationGroupSize(self::QGS_64x64);
    }
}

