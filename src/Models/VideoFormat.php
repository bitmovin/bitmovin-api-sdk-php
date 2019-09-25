<?php

namespace BitmovinApiSdk\Models;

class VideoFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const UNDEFINED = 'UNDEFINED';

    /** @var string */
    private const COMPONENT = 'COMPONENT';

    /** @var string */
    private const PAL = 'PAL';

    /** @var string */
    private const NTSC = 'NTSC';

    /** @var string */
    private const SECAM = 'SECAM';

    /** @var string */
    private const MAC = 'MAC';

    /**
     * @param string $value
     * @return VideoFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * UNDEFINED
     *
     * @return VideoFormat
     */
    public static function UNDEFINED()
    {
        return new VideoFormat(self::UNDEFINED);
    }

    /**
     * COMPONENT
     *
     * @return VideoFormat
     */
    public static function COMPONENT()
    {
        return new VideoFormat(self::COMPONENT);
    }

    /**
     * PAL
     *
     * @return VideoFormat
     */
    public static function PAL()
    {
        return new VideoFormat(self::PAL);
    }

    /**
     * NTSC
     *
     * @return VideoFormat
     */
    public static function NTSC()
    {
        return new VideoFormat(self::NTSC);
    }

    /**
     * SECAM
     *
     * @return VideoFormat
     */
    public static function SECAM()
    {
        return new VideoFormat(self::SECAM);
    }

    /**
     * MAC
     *
     * @return VideoFormat
     */
    public static function MAC()
    {
        return new VideoFormat(self::MAC);
    }
}

