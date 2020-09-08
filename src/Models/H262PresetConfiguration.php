<?php

namespace BitmovinApiSdk\Models;

class H262PresetConfiguration extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const XDCAM_HD_422 = 'XDCAM_HD_422';

    /**
     * @param string $value
     * @return H262PresetConfiguration
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Codec specific settings for XDCAM HD 422.
     *
     * @return H262PresetConfiguration
     */
    public static function XDCAM_HD_422()
    {
        return new H262PresetConfiguration(self::XDCAM_HD_422);
    }
}

