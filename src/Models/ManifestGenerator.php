<?php

namespace BitmovinApiSdk\Models;

class ManifestGenerator extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const LEGACY = 'LEGACY';

    /** @var string */
    private const V2 = 'V2';

    /**
     * @param string $value
     * @return ManifestGenerator
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Legacy manifest generator.
     *
     * @return ManifestGenerator
     */
    public static function LEGACY()
    {
        return new ManifestGenerator(self::LEGACY);
    }

    /**
     * Improved manifest generator which covers all manifest features available in our API.
     *
     * @return ManifestGenerator
     */
    public static function V2()
    {
        return new ManifestGenerator(self::V2);
    }
}

