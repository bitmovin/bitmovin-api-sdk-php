<?php

namespace BitmovinApiSdk\Models;

class PcmPresetConfiguration extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const XDCAM = 'XDCAM';

    /**
     * @param string $value
     * @return PcmPresetConfiguration
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Preset with 48kHz sampling rate, S24LE sampling format and MONO channel layout.
     *
     * @return PcmPresetConfiguration
     */
    public static function XDCAM()
    {
        return new PcmPresetConfiguration(self::XDCAM);
    }
}

