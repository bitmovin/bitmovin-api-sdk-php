<?php

namespace BitmovinApiSdk\Models;

class H264NalHrd extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const VBR = 'VBR';

    /** @var string */
    private const CBR = 'CBR';

    /**
     * @param string $value
     * @return H264NalHrd
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Do not signal HRD information
     *
     * @return H264NalHrd
     */
    public static function NONE()
    {
        return new H264NalHrd(self::NONE);
    }

    /**
     * Signal HRD for variable bitrate
     *
     * @return H264NalHrd
     */
    public static function VBR()
    {
        return new H264NalHrd(self::VBR);
    }

    /**
     * Signal HRD for constant bitrate (Not possible with fragmented or progressive MP4 muxings)
     *
     * @return H264NalHrd
     */
    public static function CBR()
    {
        return new H264NalHrd(self::CBR);
    }
}

