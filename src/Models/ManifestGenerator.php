<?php

namespace BitmovinApiSdk\Models;

class ManifestGenerator extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const LEGACY = 'LEGACY';

    /** @var string */
    private const V2_BETA = 'V2_BETA';

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
     * The new manifest generator provides the same functionality as the old one, but it is still under active development and new features will become gradually available.
     *
     * @return ManifestGenerator
     */
    public static function V2_BETA()
    {
        return new ManifestGenerator(self::V2_BETA);
    }
}

