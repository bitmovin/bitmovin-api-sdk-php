<?php

namespace BitmovinApiSdk\Models;

class HlsManifestAdMarkerType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const EXT_X_CUE_OUT_IN = 'EXT_X_CUE_OUT_IN';

    /** @var string */
    private const EXT_OATCLS_SCTE35 = 'EXT_OATCLS_SCTE35';

    /** @var string */
    private const EXT_X_SPLICEPOINT_SCTE35 = 'EXT_X_SPLICEPOINT_SCTE35';

    /**
     * @param string $value
     * @return HlsManifestAdMarkerType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Ad markers will be inserted using &#x60;#EXT-X-CUE-OUT&#x60; and &#x60;#EXT-X-CUE-IN&#x60; tags
     *
     * @return HlsManifestAdMarkerType
     */
    public static function EXT_X_CUE_OUT_IN()
    {
        return new HlsManifestAdMarkerType(self::EXT_X_CUE_OUT_IN);
    }

    /**
     * Ad markers will be inserted using &#x60;#EXT-OATCLS-SCTE35&#x60; tags. They contain the base64 encoded raw bytes of the original SCTE-35 trigger.
     *
     * @return HlsManifestAdMarkerType
     */
    public static function EXT_OATCLS_SCTE35()
    {
        return new HlsManifestAdMarkerType(self::EXT_OATCLS_SCTE35);
    }

    /**
     * Ad markers will be inserted using &#x60;#EXT-X-SPLICEPOINT-SCTE35&#x60; tags. They contain the base64 encoded raw bytes of the original SCTE-35 trigger.
     *
     * @return HlsManifestAdMarkerType
     */
    public static function EXT_X_SPLICEPOINT_SCTE35()
    {
        return new HlsManifestAdMarkerType(self::EXT_X_SPLICEPOINT_SCTE35);
    }
}

