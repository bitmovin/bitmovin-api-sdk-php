<?php

namespace BitmovinApiSdk\Models;

class InputStreamType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const INGEST = 'INGEST';

    /** @var string */
    private const CONCATENATION = 'CONCATENATION';

    /** @var string */
    private const TRIMMING_TIME_BASED = 'TRIMMING_TIME_BASED';

    /** @var string */
    private const TRIMMING_TIME_CODE_TRACK = 'TRIMMING_TIME_CODE_TRACK';

    /** @var string */
    private const TRIMMING_H264_PICTURE_TIMING = 'TRIMMING_H264_PICTURE_TIMING';

    /** @var string */
    private const SIDECAR_DOLBY_VISION_METADATA = 'SIDECAR_DOLBY_VISION_METADATA';

    /** @var string */
    private const AUDIO_MIX = 'AUDIO_MIX';

    /** @var string */
    private const FILE = 'FILE';

    /** @var string */
    private const CAPTION_CEA608 = 'CAPTION_CEA608';

    /** @var string */
    private const CAPTION_CEA708 = 'CAPTION_CEA708';

    /** @var string */
    private const DVB_SUBTITLE = 'DVB_SUBTITLE';

    /** @var string */
    private const DVB_TELETEXT = 'DVB_TELETEXT';

    /** @var string */
    private const DOLBY_ATMOS = 'DOLBY_ATMOS';

    /**
     * @param string $value
     * @return InputStreamType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * INGEST
     *
     * @return InputStreamType
     */
    public static function INGEST()
    {
        return new InputStreamType(self::INGEST);
    }

    /**
     * CONCATENATION
     *
     * @return InputStreamType
     */
    public static function CONCATENATION()
    {
        return new InputStreamType(self::CONCATENATION);
    }

    /**
     * TRIMMING_TIME_BASED
     *
     * @return InputStreamType
     */
    public static function TRIMMING_TIME_BASED()
    {
        return new InputStreamType(self::TRIMMING_TIME_BASED);
    }

    /**
     * TRIMMING_TIME_CODE_TRACK
     *
     * @return InputStreamType
     */
    public static function TRIMMING_TIME_CODE_TRACK()
    {
        return new InputStreamType(self::TRIMMING_TIME_CODE_TRACK);
    }

    /**
     * TRIMMING_H264_PICTURE_TIMING
     *
     * @return InputStreamType
     */
    public static function TRIMMING_H264_PICTURE_TIMING()
    {
        return new InputStreamType(self::TRIMMING_H264_PICTURE_TIMING);
    }

    /**
     * SIDECAR_DOLBY_VISION_METADATA
     *
     * @return InputStreamType
     */
    public static function SIDECAR_DOLBY_VISION_METADATA()
    {
        return new InputStreamType(self::SIDECAR_DOLBY_VISION_METADATA);
    }

    /**
     * AUDIO_MIX
     *
     * @return InputStreamType
     */
    public static function AUDIO_MIX()
    {
        return new InputStreamType(self::AUDIO_MIX);
    }

    /**
     * FILE
     *
     * @return InputStreamType
     */
    public static function FILE()
    {
        return new InputStreamType(self::FILE);
    }

    /**
     * CAPTION_CEA608
     *
     * @return InputStreamType
     */
    public static function CAPTION_CEA608()
    {
        return new InputStreamType(self::CAPTION_CEA608);
    }

    /**
     * CAPTION_CEA708
     *
     * @return InputStreamType
     */
    public static function CAPTION_CEA708()
    {
        return new InputStreamType(self::CAPTION_CEA708);
    }

    /**
     * DVB_SUBTITLE
     *
     * @return InputStreamType
     */
    public static function DVB_SUBTITLE()
    {
        return new InputStreamType(self::DVB_SUBTITLE);
    }

    /**
     * DVB_TELETEXT
     *
     * @return InputStreamType
     */
    public static function DVB_TELETEXT()
    {
        return new InputStreamType(self::DVB_TELETEXT);
    }

    /**
     * DOLBY_ATMOS
     *
     * @return InputStreamType
     */
    public static function DOLBY_ATMOS()
    {
        return new InputStreamType(self::DOLBY_ATMOS);
    }
}

