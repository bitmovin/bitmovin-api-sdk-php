<?php

namespace BitmovinApiSdk\Models;

class SmoothManifestDefaultVersion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const V1 = 'V1';

    /**
     * @param string $value
     * @return SmoothManifestDefaultVersion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * V1
     *
     * @return SmoothManifestDefaultVersion
     */
    public static function V1()
    {
        return new SmoothManifestDefaultVersion(self::V1);
    }
}

