<?php

namespace BitmovinApiSdk\Models;

class StreamSelectionMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AUTO = 'AUTO';

    /** @var string */
    private const POSITION_ABSOLUTE = 'POSITION_ABSOLUTE';

    /** @var string */
    private const VIDEO_RELATIVE = 'VIDEO_RELATIVE';

    /** @var string */
    private const AUDIO_RELATIVE = 'AUDIO_RELATIVE';

    /** @var string */
    private const SUBTITLE_RELATIVE = 'SUBTITLE_RELATIVE';

    /**
     * @param string $value
     * @return StreamSelectionMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Automatically select the first stream that fits the Stream&#39;s codec configuration
     *
     * @return StreamSelectionMode
     */
    public static function AUTO()
    {
        return new StreamSelectionMode(self::AUTO);
    }

    /**
     * Use the stream specified by &#39;position&#39;
     *
     * @return StreamSelectionMode
     */
    public static function POSITION_ABSOLUTE()
    {
        return new StreamSelectionMode(self::POSITION_ABSOLUTE);
    }

    /**
     * Use the stream specified by &#39;position&#39;, counting video streams only
     *
     * @return StreamSelectionMode
     */
    public static function VIDEO_RELATIVE()
    {
        return new StreamSelectionMode(self::VIDEO_RELATIVE);
    }

    /**
     * Use the stream specified by &#39;position&#39;, counting audio streams only
     *
     * @return StreamSelectionMode
     */
    public static function AUDIO_RELATIVE()
    {
        return new StreamSelectionMode(self::AUDIO_RELATIVE);
    }

    /**
     * Use the stream specified by &#39;position&#39;, counting subtitle streams only
     *
     * @return StreamSelectionMode
     */
    public static function SUBTITLE_RELATIVE()
    {
        return new StreamSelectionMode(self::SUBTITLE_RELATIVE);
    }
}

