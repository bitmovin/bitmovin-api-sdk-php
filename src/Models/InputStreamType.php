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
    private const AUDIO_MIX = 'AUDIO_MIX';

    /** @var string */
    private const FILE = 'FILE';

    /** @var string */
    private const CAPTION_CEA608 = 'CAPTION_CEA608';

    /** @var string */
    private const CAPTION_CEA708 = 'CAPTION_CEA708';

    /** @var string */
    private const DVB_TELETEXT = 'DVB_TELETEXT';

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
     * DVB_TELETEXT
     *
     * @return InputStreamType
     */
    public static function DVB_TELETEXT()
    {
        return new InputStreamType(self::DVB_TELETEXT);
    }
}

