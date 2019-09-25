<?php

namespace BitmovinApiSdk\Models;

class MinCodingUnitSize extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MCU_8x8 = 'MCU_8x8';

    /** @var string */
    private const MCU_16x16 = 'MCU_16x16';

    /** @var string */
    private const MCU_32x32 = 'MCU_32x32';

    /**
     * @param string $value
     * @return MinCodingUnitSize
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * minimum 8x8 CU
     *
     * @return MinCodingUnitSize
     */
    public static function MCU_8x8()
    {
        return new MinCodingUnitSize(self::MCU_8x8);
    }

    /**
     * minimum 16x16 CU
     *
     * @return MinCodingUnitSize
     */
    public static function MCU_16x16()
    {
        return new MinCodingUnitSize(self::MCU_16x16);
    }

    /**
     * minimum 32x32 CU
     *
     * @return MinCodingUnitSize
     */
    public static function MCU_32x32()
    {
        return new MinCodingUnitSize(self::MCU_32x32);
    }
}

