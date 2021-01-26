<?php

namespace BitmovinApiSdk\Models;

class MuxingType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const FMP4 = 'FMP4';

    /** @var string */
    private const CMAF = 'CMAF';

    /** @var string */
    private const MP4 = 'MP4';

    /** @var string */
    private const TS = 'TS';

    /** @var string */
    private const WEBM = 'WEBM';

    /** @var string */
    private const MP3 = 'MP3';

    /** @var string */
    private const MXF = 'MXF';

    /** @var string */
    private const PROGRESSIVE_WEBM = 'PROGRESSIVE_WEBM';

    /** @var string */
    private const PROGRESSIVE_MOV = 'PROGRESSIVE_MOV';

    /** @var string */
    private const PROGRESSIVE_TS = 'PROGRESSIVE_TS';

    /** @var string */
    private const BROADCAST_TS = 'BROADCAST_TS';

    /** @var string */
    private const CHUNKED_TEXT = 'CHUNKED_TEXT';

    /** @var string */
    private const TEXT = 'TEXT';

    /** @var string */
    private const SEGMENTED_RAW = 'SEGMENTED_RAW';

    /** @var string */
    private const PACKED_AUDIO = 'PACKED_AUDIO';

    /**
     * @param string $value
     * @return MuxingType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * FMP4
     *
     * @return MuxingType
     */
    public static function FMP4()
    {
        return new MuxingType(self::FMP4);
    }

    /**
     * CMAF
     *
     * @return MuxingType
     */
    public static function CMAF()
    {
        return new MuxingType(self::CMAF);
    }

    /**
     * MP4
     *
     * @return MuxingType
     */
    public static function MP4()
    {
        return new MuxingType(self::MP4);
    }

    /**
     * TS
     *
     * @return MuxingType
     */
    public static function TS()
    {
        return new MuxingType(self::TS);
    }

    /**
     * WEBM
     *
     * @return MuxingType
     */
    public static function WEBM()
    {
        return new MuxingType(self::WEBM);
    }

    /**
     * MP3
     *
     * @return MuxingType
     */
    public static function MP3()
    {
        return new MuxingType(self::MP3);
    }

    /**
     * MXF
     *
     * @return MuxingType
     */
    public static function MXF()
    {
        return new MuxingType(self::MXF);
    }

    /**
     * PROGRESSIVE_WEBM
     *
     * @return MuxingType
     */
    public static function PROGRESSIVE_WEBM()
    {
        return new MuxingType(self::PROGRESSIVE_WEBM);
    }

    /**
     * PROGRESSIVE_MOV
     *
     * @return MuxingType
     */
    public static function PROGRESSIVE_MOV()
    {
        return new MuxingType(self::PROGRESSIVE_MOV);
    }

    /**
     * PROGRESSIVE_TS
     *
     * @return MuxingType
     */
    public static function PROGRESSIVE_TS()
    {
        return new MuxingType(self::PROGRESSIVE_TS);
    }

    /**
     * BROADCAST_TS
     *
     * @return MuxingType
     */
    public static function BROADCAST_TS()
    {
        return new MuxingType(self::BROADCAST_TS);
    }

    /**
     * CHUNKED_TEXT
     *
     * @return MuxingType
     */
    public static function CHUNKED_TEXT()
    {
        return new MuxingType(self::CHUNKED_TEXT);
    }

    /**
     * TEXT
     *
     * @return MuxingType
     */
    public static function TEXT()
    {
        return new MuxingType(self::TEXT);
    }

    /**
     * SEGMENTED_RAW
     *
     * @return MuxingType
     */
    public static function SEGMENTED_RAW()
    {
        return new MuxingType(self::SEGMENTED_RAW);
    }

    /**
     * PACKED_AUDIO
     *
     * @return MuxingType
     */
    public static function PACKED_AUDIO()
    {
        return new MuxingType(self::PACKED_AUDIO);
    }
}

