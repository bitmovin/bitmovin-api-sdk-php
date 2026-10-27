<?php

namespace BitmovinApiSdk\Models;

class Av1DetailPreservationMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AUTO = 'AUTO';

    /** @var string */
    private const ON = 'ON';

    /** @var string */
    private const OFF = 'OFF';

    /**
     * @param string $value
     * @return Av1DetailPreservationMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Detail preservation is applied to the renditions where it is most effective: those whose resolution is at least 25% (in pixels) of the highest AV1 rendition of the encoding
     *
     * @return Av1DetailPreservationMode
     */
    public static function AUTO()
    {
        return new Av1DetailPreservationMode(self::AUTO);
    }

    /**
     * Detail preservation is applied to all renditions
     *
     * @return Av1DetailPreservationMode
     */
    public static function ON()
    {
        return new Av1DetailPreservationMode(self::ON);
    }

    /**
     * Detail preservation is disabled
     *
     * @return Av1DetailPreservationMode
     */
    public static function OFF()
    {
        return new Av1DetailPreservationMode(self::OFF);
    }
}

