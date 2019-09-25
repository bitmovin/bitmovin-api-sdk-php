<?php

namespace BitmovinApiSdk\Models;

class MaxTransformUnitSize extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MTU_4x4 = 'MTU_4x4';

    /** @var string */
    private const MTU_8x8 = 'MTU_8x8';

    /** @var string */
    private const MTU_16x16 = 'MTU_16x16';

    /** @var string */
    private const MTU_32x32 = 'MTU_32x32';

    /**
     * @param string $value
     * @return MaxTransformUnitSize
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * maximum 4x4 TU
     *
     * @return MaxTransformUnitSize
     */
    public static function MTU_4x4()
    {
        return new MaxTransformUnitSize(self::MTU_4x4);
    }

    /**
     * maximum 8x8 TU
     *
     * @return MaxTransformUnitSize
     */
    public static function MTU_8x8()
    {
        return new MaxTransformUnitSize(self::MTU_8x8);
    }

    /**
     * maximum 16x16 TU
     *
     * @return MaxTransformUnitSize
     */
    public static function MTU_16x16()
    {
        return new MaxTransformUnitSize(self::MTU_16x16);
    }

    /**
     * maximum 32x32 TU
     *
     * @return MaxTransformUnitSize
     */
    public static function MTU_32x32()
    {
        return new MaxTransformUnitSize(self::MTU_32x32);
    }
}

