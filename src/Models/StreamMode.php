<?php

namespace BitmovinApiSdk\Models;

class StreamMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const STANDARD = 'STANDARD';

    /** @var string */
    private const PER_TITLE_TEMPLATE = 'PER_TITLE_TEMPLATE';

    /** @var string */
    private const PER_TITLE_TEMPLATE_FIXED_RESOLUTION = 'PER_TITLE_TEMPLATE_FIXED_RESOLUTION';

    /** @var string */
    private const PER_TITLE_TEMPLATE_FIXED_RESOLUTION_AND_BITRATE = 'PER_TITLE_TEMPLATE_FIXED_RESOLUTION_AND_BITRATE';

    /** @var string */
    private const PER_TITLE_RESULT = 'PER_TITLE_RESULT';

    /**
     * @param string $value
     * @return StreamMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Standard encoding. This is used to configure renditions that must show up in the output, i.e. will get encoded exactly as configured.
     *
     * @return StreamMode
     */
    public static function STANDARD()
    {
        return new StreamMode(self::STANDARD);
    }

    /**
     * Template for Per-Title encoding. This is used to define encoding settings for a given resolution when Per-Title encoding is enabled. Additionally, it allows to define which resolutions should be considered by Per-Title encoding.
     *
     * @return StreamMode
     */
    public static function PER_TITLE_TEMPLATE()
    {
        return new StreamMode(self::PER_TITLE_TEMPLATE);
    }

    /**
     * Same as PER_TITLE_TEMPLATE, but it will be ensured that the configured resolution will be present in the Per-Title result.
     *
     * @return StreamMode
     */
    public static function PER_TITLE_TEMPLATE_FIXED_RESOLUTION()
    {
        return new StreamMode(self::PER_TITLE_TEMPLATE_FIXED_RESOLUTION);
    }

    /**
     * Same as PER_TITLE_TEMPLATE, but it will be ensured that the configured resolution and bitrate range will be present in the Per-Title result.
     *
     * @return StreamMode
     */
    public static function PER_TITLE_TEMPLATE_FIXED_RESOLUTION_AND_BITRATE()
    {
        return new StreamMode(self::PER_TITLE_TEMPLATE_FIXED_RESOLUTION_AND_BITRATE);
    }

    /**
     * Once the Per-Title encoding is done, the generated streams will have this mode set.
     *
     * @return StreamMode
     */
    public static function PER_TITLE_RESULT()
    {
        return new StreamMode(self::PER_TITLE_RESULT);
    }
}

