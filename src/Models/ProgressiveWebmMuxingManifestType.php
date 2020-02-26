<?php

namespace BitmovinApiSdk\Models;

class ProgressiveWebmMuxingManifestType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DASH_ON_DEMAND = 'DASH_ON_DEMAND';

    /** @var string */
    private const NONE = 'NONE';

    /**
     * @param string $value
     * @return ProgressiveWebmMuxingManifestType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Allow creation of DASH on-demand manifests
     *
     * @return ProgressiveWebmMuxingManifestType
     */
    public static function DASH_ON_DEMAND()
    {
        return new ProgressiveWebmMuxingManifestType(self::DASH_ON_DEMAND);
    }

    /**
     * Do not allow creation of manifests
     *
     * @return ProgressiveWebmMuxingManifestType
     */
    public static function NONE()
    {
        return new ProgressiveWebmMuxingManifestType(self::NONE);
    }
}

