<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalPlusNinetyDegreePhaseShift extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return DolbyDigitalPlusNinetyDegreePhaseShift
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable 90° phase shift
     *
     * @return DolbyDigitalPlusNinetyDegreePhaseShift
     */
    public static function ENABLED()
    {
        return new DolbyDigitalPlusNinetyDegreePhaseShift(self::ENABLED);
    }

    /**
     * Disable 90° phase shift
     *
     * @return DolbyDigitalPlusNinetyDegreePhaseShift
     */
    public static function DISABLED()
    {
        return new DolbyDigitalPlusNinetyDegreePhaseShift(self::DISABLED);
    }
}

