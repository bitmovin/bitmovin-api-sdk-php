<?php

namespace BitmovinApiSdk\Models;

class LiveStandbyPoolEncodingManifestType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DASH = 'DASH';

    /** @var string */
    private const HLS = 'HLS';

    /**
     * @param string $value
     * @return LiveStandbyPoolEncodingManifestType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The manifest is a DASH manifest
     *
     * @return LiveStandbyPoolEncodingManifestType
     */
    public static function DASH()
    {
        return new LiveStandbyPoolEncodingManifestType(self::DASH);
    }

    /**
     * The manifest is a HLS manifest
     *
     * @return LiveStandbyPoolEncodingManifestType
     */
    public static function HLS()
    {
        return new LiveStandbyPoolEncodingManifestType(self::HLS);
    }
}

