<?php

namespace BitmovinApiSdk\Models;

class PrewarmedEncoderDiskSize extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const GB_500 = '500';

    /** @var string */
    private const GB_1000 = '1000';

    /** @var string */
    private const GB_2000 = '2000';

    /**
     * @param string $value
     * @return PrewarmedEncoderDiskSize
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * GB_500
     *
     * @return PrewarmedEncoderDiskSize
     */
    public static function GB_500()
    {
        return new PrewarmedEncoderDiskSize(self::GB_500);
    }

    /**
     * GB_1000
     *
     * @return PrewarmedEncoderDiskSize
     */
    public static function GB_1000()
    {
        return new PrewarmedEncoderDiskSize(self::GB_1000);
    }

    /**
     * GB_2000
     *
     * @return PrewarmedEncoderDiskSize
     */
    public static function GB_2000()
    {
        return new PrewarmedEncoderDiskSize(self::GB_2000);
    }
}

