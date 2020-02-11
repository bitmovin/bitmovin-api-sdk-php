<?php

namespace BitmovinApiSdk\Models;

class DashManifestDefaultVersion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const V1 = 'V1';

    /** @var string */
    private const V2 = 'V2';

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

    /**
     * V2
     *
     * @return DashManifestDefaultVersion
     */
    public static function V2()
    {
        return new DashManifestDefaultVersion(self::V2);
    }
}

