<?php

namespace BitmovinApiSdk\Models;

class HlsManifestDefaultVersion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const V1 = 'V1';

    /**
     * @param string $value
     * @return HlsManifestDefaultVersion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * V1
     *
     * @return HlsManifestDefaultVersion
     */
    public static function V1()
    {
        return new HlsManifestDefaultVersion(self::V1);
    }
}

