<?php

namespace BitmovinApiSdk\Models;

class H264Partition extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const P8X8 = 'P8X8';

    /** @var string */
    private const P4X4 = 'P4X4';

    /** @var string */
    private const B8X8 = 'B8X8';

    /** @var string */
    private const I8X8 = 'I8X8';

    /** @var string */
    private const I4X4 = 'I4X4';

    /** @var string */
    private const ALL = 'ALL';

    /**
     * @param string $value
     * @return H264Partition
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Consider no macroblocks
     *
     * @return H264Partition
     */
    public static function NONE()
    {
        return new H264Partition(self::NONE);
    }

    /**
     * Consider P-macroblocks with size 8x8, 16X8, 8X16
     *
     * @return H264Partition
     */
    public static function P8X8()
    {
        return new H264Partition(self::P8X8);
    }

    /**
     * Consider P-macroblocks with size 4x4, 8X4, 4x8
     *
     * @return H264Partition
     */
    public static function P4X4()
    {
        return new H264Partition(self::P4X4);
    }

    /**
     * Consider B-macroblocks with size 8x8, 16X8, 8X16
     *
     * @return H264Partition
     */
    public static function B8X8()
    {
        return new H264Partition(self::B8X8);
    }

    /**
     * Consider I-macroblocks with size 8x8
     *
     * @return H264Partition
     */
    public static function I8X8()
    {
        return new H264Partition(self::I8X8);
    }

    /**
     * Consider I-macroblocks with size 4x4
     *
     * @return H264Partition
     */
    public static function I4X4()
    {
        return new H264Partition(self::I4X4);
    }

    /**
     * Consider all possible sizes of macroblocks
     *
     * @return H264Partition
     */
    public static function ALL()
    {
        return new H264Partition(self::ALL);
    }
}

