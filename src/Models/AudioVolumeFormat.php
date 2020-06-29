<?php

namespace BitmovinApiSdk\Models;

class AudioVolumeFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const U8 = 'U8';

    /** @var string */
    private const S16 = 'S16';

    /** @var string */
    private const S32 = 'S32';

    /** @var string */
    private const U8P = 'U8P';

    /** @var string */
    private const S16P = 'S16P';

    /** @var string */
    private const S32P = 'S32P';

    /** @var string */
    private const S64 = 'S64';

    /** @var string */
    private const S64P = 'S64P';

    /** @var string */
    private const FLT = 'FLT';

    /** @var string */
    private const FLTP = 'FLTP';

    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const DBL = 'DBL';

    /** @var string */
    private const DBLP = 'DBLP';

    /**
     * @param string $value
     * @return AudioVolumeFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function U8()
    {
        return new AudioVolumeFormat(self::U8);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function S16()
    {
        return new AudioVolumeFormat(self::S16);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function S32()
    {
        return new AudioVolumeFormat(self::S32);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function U8P()
    {
        return new AudioVolumeFormat(self::U8P);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function S16P()
    {
        return new AudioVolumeFormat(self::S16P);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function S32P()
    {
        return new AudioVolumeFormat(self::S32P);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function S64()
    {
        return new AudioVolumeFormat(self::S64);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function S64P()
    {
        return new AudioVolumeFormat(self::S64P);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function FLT()
    {
        return new AudioVolumeFormat(self::FLT);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function FLTP()
    {
        return new AudioVolumeFormat(self::FLTP);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function NONE()
    {
        return new AudioVolumeFormat(self::NONE);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function DBL()
    {
        return new AudioVolumeFormat(self::DBL);
    }

    /**
     * Audio volume format
     *
     * @return AudioVolumeFormat
     */
    public static function DBLP()
    {
        return new AudioVolumeFormat(self::DBLP);
    }
}

