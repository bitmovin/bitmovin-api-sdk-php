<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalNinetyDegreePhaseShift extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return DolbyDigitalNinetyDegreePhaseShift
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable 90° phase shift
     *
     * @return DolbyDigitalNinetyDegreePhaseShift
     */
    public static function ENABLED()
    {
        return new DolbyDigitalNinetyDegreePhaseShift(self::ENABLED);
    }

    /**
     * Disable 90° phase shift
     *
     * @return DolbyDigitalNinetyDegreePhaseShift
     */
    public static function DISABLED()
    {
        return new DolbyDigitalNinetyDegreePhaseShift(self::DISABLED);
    }
}

