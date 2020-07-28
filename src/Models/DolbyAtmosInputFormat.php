<?php

namespace BitmovinApiSdk\Models;

class DolbyAtmosInputFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DAMF = 'DAMF';

    /** @var string */
    private const ADM = 'ADM';

    /**
     * @param string $value
     * @return DolbyAtmosInputFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Dolby Atmos input format is DAMF (Dolby Atmos Master Format), usually a .atmos file. The &#39;metadata&#39; and &#39;audio&#39; files referenced within this file need to reside in the same directory and will be resolved automatically.
     *
     * @return DolbyAtmosInputFormat
     */
    public static function DAMF()
    {
        return new DolbyAtmosInputFormat(self::DAMF);
    }

    /**
     * Dolby Atmos input format is ADM (Audio Definition Model), usually a .wav file
     *
     * @return DolbyAtmosInputFormat
     */
    public static function ADM()
    {
        return new DolbyAtmosInputFormat(self::ADM);
    }
}

