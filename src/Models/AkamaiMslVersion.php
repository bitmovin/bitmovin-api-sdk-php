<?php

namespace BitmovinApiSdk\Models;

class AkamaiMslVersion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MSL4 = 'MSL4';

    /**
     * @param string $value
     * @return AkamaiMslVersion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * MSL4
     *
     * @return AkamaiMslVersion
     */
    public static function MSL4()
    {
        return new AkamaiMslVersion(self::MSL4);
    }
}

