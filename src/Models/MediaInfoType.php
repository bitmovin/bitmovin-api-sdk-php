<?php

namespace BitmovinApiSdk\Models;

class MediaInfoType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AUDIO = 'AUDIO';

    /** @var string */
    private const VIDEO = 'VIDEO';

    /** @var string */
    private const SUBTITLES = 'SUBTITLES';

    /** @var string */
    private const CLOSED_CAPTIONS = 'CLOSED_CAPTIONS';

    /** @var string */
    private const VTT = 'VTT';

    /**
     * @param string $value
     * @return MediaInfoType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * AUDIO
     *
     * @return MediaInfoType
     */
    public static function AUDIO()
    {
        return new MediaInfoType(self::AUDIO);
    }

    /**
     * VIDEO
     *
     * @return MediaInfoType
     */
    public static function VIDEO()
    {
        return new MediaInfoType(self::VIDEO);
    }

    /**
     * SUBTITLES
     *
     * @return MediaInfoType
     */
    public static function SUBTITLES()
    {
        return new MediaInfoType(self::SUBTITLES);
    }

    /**
     * CLOSED_CAPTIONS
     *
     * @return MediaInfoType
     */
    public static function CLOSED_CAPTIONS()
    {
        return new MediaInfoType(self::CLOSED_CAPTIONS);
    }

    /**
     * VTT
     *
     * @return MediaInfoType
     */
    public static function VTT()
    {
        return new MediaInfoType(self::VTT);
    }
}

