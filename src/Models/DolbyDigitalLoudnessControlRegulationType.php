<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalLoudnessControlRegulationType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const EBU_R128 = 'EBU_R128';

    /** @var string */
    private const ATSC_A85_FIXED = 'ATSC_A85_FIXED';

    /** @var string */
    private const ATSC_A85_AGILE = 'ATSC_A85_AGILE';

    /** @var string */
    private const MANUAL = 'MANUAL';

    /**
     * @param string $value
     * @return DolbyDigitalLoudnessControlRegulationType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * EBU 128 loudness control regulation type
     *
     * @return DolbyDigitalLoudnessControlRegulationType
     */
    public static function EBU_R128()
    {
        return new DolbyDigitalLoudnessControlRegulationType(self::EBU_R128);
    }

    /**
     * ATSC A85 loudness control regulation type
     *
     * @return DolbyDigitalLoudnessControlRegulationType
     */
    public static function ATSC_A85_FIXED()
    {
        return new DolbyDigitalLoudnessControlRegulationType(self::ATSC_A85_FIXED);
    }

    /**
     * ATSC A85 loudness control regulation type
     *
     * @return DolbyDigitalLoudnessControlRegulationType
     */
    public static function ATSC_A85_AGILE()
    {
        return new DolbyDigitalLoudnessControlRegulationType(self::ATSC_A85_AGILE);
    }

    /**
     * Manual loudness control regulation type
     *
     * @return DolbyDigitalLoudnessControlRegulationType
     */
    public static function MANUAL()
    {
        return new DolbyDigitalLoudnessControlRegulationType(self::MANUAL);
    }
}

