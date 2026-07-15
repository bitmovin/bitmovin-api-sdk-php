<?php

namespace BitmovinApiSdk\Models;

class H265V2PerceptualEncodingMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const OFF = 'OFF';

    /** @var string */
    private const CU_DELTA_QP = 'CU_DELTA_QP';

    /**
     * @param string $value
     * @return H265V2PerceptualEncodingMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Perceptual encoding disabled
     *
     * @return H265V2PerceptualEncodingMode
     */
    public static function OFF()
    {
        return new H265V2PerceptualEncodingMode(self::OFF);
    }

    /**
     * HVS-based perceptual encoding using CU delta QP
     *
     * @return H265V2PerceptualEncodingMode
     */
    public static function CU_DELTA_QP()
    {
        return new H265V2PerceptualEncodingMode(self::CU_DELTA_QP);
    }
}

