<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalPlusDownmixingPreferredMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const LO_RO = 'LO_RO';

    /** @var string */
    private const LT_RT = 'LT_RT';

    /** @var string */
    private const PRO_LOGIC_II = 'PRO_LOGIC_II';

    /**
     * @param string $value
     * @return DolbyDigitalPlusDownmixingPreferredMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Lo/Ro stereo downmixing mode
     *
     * @return DolbyDigitalPlusDownmixingPreferredMode
     */
    public static function LO_RO()
    {
        return new DolbyDigitalPlusDownmixingPreferredMode(self::LO_RO);
    }

    /**
     * Lt/Rt surround downmixing mode
     *
     * @return DolbyDigitalPlusDownmixingPreferredMode
     */
    public static function LT_RT()
    {
        return new DolbyDigitalPlusDownmixingPreferredMode(self::LT_RT);
    }

    /**
     * Dolby Pro Logic 2 downmixing mode
     *
     * @return DolbyDigitalPlusDownmixingPreferredMode
     */
    public static function PRO_LOGIC_II()
    {
        return new DolbyDigitalPlusDownmixingPreferredMode(self::PRO_LOGIC_II);
    }
}

