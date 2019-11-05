<?php

namespace BitmovinApiSdk\Models;

class DeinterlaceAutoEnable extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ALWAYS_ON = 'ALWAYS_ON';

    /** @var string */
    private const META_DATA_BASED = 'META_DATA_BASED';

    /** @var string */
    private const META_DATA_AND_CONTENT_BASED = 'META_DATA_AND_CONTENT_BASED';

    /**
     * @param string $value
     * @return DeinterlaceAutoEnable
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The content will always be deinterlaced with the settings specified (mode, parity, frameSelectionMode)
     *
     * @return DeinterlaceAutoEnable
     */
    public static function ALWAYS_ON()
    {
        return new DeinterlaceAutoEnable(self::ALWAYS_ON);
    }

    /**
     * The deinterlace filter will only be applied when interlaced content is signaled in the meta data of the input stream. In that case, if the parity setting is set to &quot;AUTO&quot;, it will be overwritten with the result of the metadata probing. In cases where parity is not set to &quot;AUTO&quot; the configured value will be used.
     *
     * @return DeinterlaceAutoEnable
     */
    public static function META_DATA_BASED()
    {
        return new DeinterlaceAutoEnable(self::META_DATA_BASED);
    }

    /**
     * This option will check if the content is signaled as interlaced first. If not, the frames are analyzed to detect interlaced frames. If the content is signaled as interlaced by the meta data this mode works same as &quot;META_DATA_BASED&quot;. If content analysis detects interlaced frames the deinterlace filter will be applied in frameSelectionMode &quot;ALL&quot;. Additionally, the parity will always be overwritten with the result of the metadata probing.
     *
     * @return DeinterlaceAutoEnable
     */
    public static function META_DATA_AND_CONTENT_BASED()
    {
        return new DeinterlaceAutoEnable(self::META_DATA_AND_CONTENT_BASED);
    }
}

