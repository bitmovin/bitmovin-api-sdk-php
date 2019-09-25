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
     * The deinterlace filter will only be applied when interlaced content is detected in the meta data of the input stream. Additionally the parity will be set using the meta data if the parity is set as &quot;AUTO&quot; or &quot;default&quot;. Otherwise it will use the specified parity.
     *
     * @return DeinterlaceAutoEnable
     */
    public static function META_DATA_BASED()
    {
        return new DeinterlaceAutoEnable(self::META_DATA_BASED);
    }

    /**
     * This option will test the meta data and analyse the content to detect interlaced frames. If meta data detects interlaced content the mode works same as &quot;META_DATA_BASED&quot;. If content analysis detects interlaced frames the deinterlace filter will be applied in frameSelectionMode &quot;ALL&quot;.
     *
     * @return DeinterlaceAutoEnable
     */
    public static function META_DATA_AND_CONTENT_BASED()
    {
        return new DeinterlaceAutoEnable(self::META_DATA_AND_CONTENT_BASED);
    }
}

