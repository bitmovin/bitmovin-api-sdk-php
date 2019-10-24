<?php

namespace BitmovinApiSdk\Models;

class DolbyVisionTrackSampleEntryName extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DVHE = 'DVHE';

    /** @var string */
    private const DVH1 = 'DVH1';

    /**
     * @param string $value
     * @return DolbyVisionTrackSampleEntryName
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Sets the Dolby Vision track&#39;s sample entry name to &#x60;dvhe&#x60;. This is the default value
     *
     * @return DolbyVisionTrackSampleEntryName
     */
    public static function DVHE()
    {
        return new DolbyVisionTrackSampleEntryName(self::DVHE);
    }

    /**
     * Sets the Dolby Vision track&#39;s sample entry name to &#x60;dvh1&#x60;
     *
     * @return DolbyVisionTrackSampleEntryName
     */
    public static function DVH1()
    {
        return new DolbyVisionTrackSampleEntryName(self::DVH1);
    }
}

