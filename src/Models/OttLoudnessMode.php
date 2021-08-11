<?php

namespace BitmovinApiSdk\Models;

class OttLoudnessMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DTSX_OTT_LOUDNESS_DETECT = 'DTSX_OTT_LOUDNESS_DETECT';

    /** @var string */
    private const DTSX_OTT_LOUDNESS_INPUT = 'DTSX_OTT_LOUDNESS_INPUT';

    /** @var string */
    private const DTSX_OTT_LOUDNESS_TARGET = 'DTSX_OTT_LOUDNESS_TARGET';

    /**
     * @param string $value
     * @return OttLoudnessMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Specifies the OTT loudness mode. If the mode is &#x60;DTSX_OTT_LOUDNESS_DETECT&#x60;, the &#x60;lkfs&#x60; value will be calculated internally and does not need to be provided. A provided &#x60;lkfs&#x60; value will be ignored. For the modes &#x60;DTSX_OTT_LOUDNESS_INPUT&#x60; and &#x60;DTSX_OTT_LOUDNESS_TARGET&#x60; an &#x60;lkfs&#x60; value must be provided by the user.
     *
     * @return OttLoudnessMode
     */
    public static function DTSX_OTT_LOUDNESS_DETECT()
    {
        return new OttLoudnessMode(self::DTSX_OTT_LOUDNESS_DETECT);
    }

    /**
     * Specifies the OTT loudness mode. If the mode is &#x60;DTSX_OTT_LOUDNESS_DETECT&#x60;, the &#x60;lkfs&#x60; value will be calculated internally and does not need to be provided. A provided &#x60;lkfs&#x60; value will be ignored. For the modes &#x60;DTSX_OTT_LOUDNESS_INPUT&#x60; and &#x60;DTSX_OTT_LOUDNESS_TARGET&#x60; an &#x60;lkfs&#x60; value must be provided by the user.
     *
     * @return OttLoudnessMode
     */
    public static function DTSX_OTT_LOUDNESS_INPUT()
    {
        return new OttLoudnessMode(self::DTSX_OTT_LOUDNESS_INPUT);
    }

    /**
     * Specifies the OTT loudness mode. If the mode is &#x60;DTSX_OTT_LOUDNESS_DETECT&#x60;, the &#x60;lkfs&#x60; value will be calculated internally and does not need to be provided. A provided &#x60;lkfs&#x60; value will be ignored. For the modes &#x60;DTSX_OTT_LOUDNESS_INPUT&#x60; and &#x60;DTSX_OTT_LOUDNESS_TARGET&#x60; an &#x60;lkfs&#x60; value must be provided by the user.
     *
     * @return OttLoudnessMode
     */
    public static function DTSX_OTT_LOUDNESS_TARGET()
    {
        return new OttLoudnessMode(self::DTSX_OTT_LOUDNESS_TARGET);
    }
}

