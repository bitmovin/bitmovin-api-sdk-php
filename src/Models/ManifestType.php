<?php

namespace BitmovinApiSdk\Models;

class ManifestType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DASH = 'DASH';

    /** @var string */
    private const HLS = 'HLS';

    /** @var string */
    private const SMOOTH_STREAMING = 'SMOOTH_STREAMING';

    /**
     * @param string $value
     * @return ManifestType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * MPEG-DASH manifest
     *
     * @return ManifestType
     */
    public static function DASH()
    {
        return new ManifestType(self::DASH);
    }

    /**
     * Apple HTTP Live Streaming manifest
     *
     * @return ManifestType
     */
    public static function HLS()
    {
        return new ManifestType(self::HLS);
    }

    /**
     * Microsoft Smooth Streaming manifest
     *
     * @return ManifestType
     */
    public static function SMOOTH_STREAMING()
    {
        return new ManifestType(self::SMOOTH_STREAMING);
    }
}

