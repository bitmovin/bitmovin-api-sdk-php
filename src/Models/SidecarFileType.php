<?php

namespace BitmovinApiSdk\Models;

class SidecarFileType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const WEB_VTT = 'WEB_VTT';

    /**
     * @param string $value
     * @return SidecarFileType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * WEB_VTT
     *
     * @return SidecarFileType
     */
    public static function WEB_VTT()
    {
        return new SidecarFileType(self::WEB_VTT);
    }
}

