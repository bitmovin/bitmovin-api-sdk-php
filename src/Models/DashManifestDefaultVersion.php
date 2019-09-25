<?php

namespace BitmovinApiSdk\Models;

class DashManifestDefaultVersion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const V1 = 'V1';

    /**
     * @param string $value
     * @return DashManifestDefaultVersion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * V1
     *
     * @return DashManifestDefaultVersion
     */
    public static function V1()
    {
        return new DashManifestDefaultVersion(self::V1);
    }
}

