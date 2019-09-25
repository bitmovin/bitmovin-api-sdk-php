<?php

namespace BitmovinApiSdk\Models;

class AkamaiMslStreamFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DASH = 'DASH';

    /** @var string */
    private const HLS = 'HLS';

    /** @var string */
    private const CMAF = 'CMAF';

    /**
     * @param string $value
     * @return AkamaiMslStreamFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * DASH
     *
     * @return AkamaiMslStreamFormat
     */
    public static function DASH()
    {
        return new AkamaiMslStreamFormat(self::DASH);
    }

    /**
     * HLS
     *
     * @return AkamaiMslStreamFormat
     */
    public static function HLS()
    {
        return new AkamaiMslStreamFormat(self::HLS);
    }

    /**
     * CMAF
     *
     * @return AkamaiMslStreamFormat
     */
    public static function CMAF()
    {
        return new AkamaiMslStreamFormat(self::CMAF);
    }
}

