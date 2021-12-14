<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingVodJobInputType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const VIDEO = 'VIDEO';

    /** @var string */
    private const AUDIO = 'AUDIO';

    /** @var string */
    private const SUBTITLES = 'SUBTITLES';

    /** @var string */
    private const CLOSED_CAPTIONS = 'CLOSED_CAPTIONS';

    /**
     * @param string $value
     * @return SimpleEncodingVodJobInputType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Indicates that the linked input file contains a video stream
     *
     * @return SimpleEncodingVodJobInputType
     */
    public static function VIDEO()
    {
        return new SimpleEncodingVodJobInputType(self::VIDEO);
    }

    /**
     * Indicates that the linked input file contains at least one audio stream
     *
     * @return SimpleEncodingVodJobInputType
     */
    public static function AUDIO()
    {
        return new SimpleEncodingVodJobInputType(self::AUDIO);
    }

    /**
     * Indicates that the linked input file is a subtitle media file
     *
     * @return SimpleEncodingVodJobInputType
     */
    public static function SUBTITLES()
    {
        return new SimpleEncodingVodJobInputType(self::SUBTITLES);
    }

    /**
     * Indicates that the linked input file is a closed caption media file
     *
     * @return SimpleEncodingVodJobInputType
     */
    public static function CLOSED_CAPTIONS()
    {
        return new SimpleEncodingVodJobInputType(self::CLOSED_CAPTIONS);
    }
}

