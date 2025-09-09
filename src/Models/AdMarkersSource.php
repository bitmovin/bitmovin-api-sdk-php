<?php

namespace BitmovinApiSdk\Models;

class AdMarkersSource extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MANIFEST = 'MANIFEST';

    /** @var string */
    private const SEGMENTS = 'SEGMENTS';

    /**
     * @param string $value
     * @return AdMarkersSource
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * MANIFEST
     *
     * @return AdMarkersSource
     */
    public static function MANIFEST()
    {
        return new AdMarkersSource(self::MANIFEST);
    }

    /**
     * SEGMENTS
     *
     * @return AdMarkersSource
     */
    public static function SEGMENTS()
    {
        return new AdMarkersSource(self::SEGMENTS);
    }
}

