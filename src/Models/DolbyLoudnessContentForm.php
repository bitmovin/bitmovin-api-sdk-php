<?php

namespace BitmovinApiSdk\Models;

class DolbyLoudnessContentForm extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const LONG = 'LONG';

    /** @var string */
    private const SHORT = 'SHORT';

    /** @var string */
    private const AUTO_DETECT = 'AUTO_DETECT';

    /**
     * @param string $value
     * @return DolbyLoudnessContentForm
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Long-form content, i.e. longer than 3 minutes (180 seconds), such as movies or episodes. Uses relative gating for the loudness measurement.
     *
     * @return DolbyLoudnessContentForm
     */
    public static function LONG()
    {
        return new DolbyLoudnessContentForm(self::LONG);
    }

    /**
     * Short-form content, i.e. 3 minutes (180 seconds) or shorter, such as advertisements or promos. Uses no relative gating for the loudness measurement.
     *
     * @return DolbyLoudnessContentForm
     */
    public static function SHORT()
    {
        return new DolbyLoudnessContentForm(self::SHORT);
    }

    /**
     * Automatically detect the content form and apply the corresponding gating.
     *
     * @return DolbyLoudnessContentForm
     */
    public static function AUTO_DETECT()
    {
        return new DolbyLoudnessContentForm(self::AUTO_DETECT);
    }
}

