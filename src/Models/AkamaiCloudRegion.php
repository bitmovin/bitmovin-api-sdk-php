<?php

namespace BitmovinApiSdk\Models;

class AkamaiCloudRegion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const BR_GRU = 'BR_GRU';

    /** @var string */
    private const ES_MAD = 'ES_MAD';

    /** @var string */
    private const FR_PAR = 'FR_PAR';

    /** @var string */
    private const ID_CGK = 'ID_CGK';

    /** @var string */
    private const IN_MAA = 'IN_MAA';

    /** @var string */
    private const IT_MIL = 'IT_MIL';

    /** @var string */
    private const JP_OSA = 'JP_OSA';

    /** @var string */
    private const NL_AMS = 'NL_AMS';

    /** @var string */
    private const SE_STO = 'SE_STO';

    /** @var string */
    private const US_LAX = 'US_LAX';

    /** @var string */
    private const US_MIA = 'US_MIA';

    /** @var string */
    private const US_ORD = 'US_ORD';

    /** @var string */
    private const US_SEA = 'US_SEA';

    /**
     * @param string $value
     * @return AkamaiCloudRegion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * São Paulo, Brazil
     *
     * @return AkamaiCloudRegion
     */
    public static function BR_GRU()
    {
        return new AkamaiCloudRegion(self::BR_GRU);
    }

    /**
     * Madrid, Spain
     *
     * @return AkamaiCloudRegion
     */
    public static function ES_MAD()
    {
        return new AkamaiCloudRegion(self::ES_MAD);
    }

    /**
     * Paris, France
     *
     * @return AkamaiCloudRegion
     */
    public static function FR_PAR()
    {
        return new AkamaiCloudRegion(self::FR_PAR);
    }

    /**
     * Jakarta, Indonesia
     *
     * @return AkamaiCloudRegion
     */
    public static function ID_CGK()
    {
        return new AkamaiCloudRegion(self::ID_CGK);
    }

    /**
     * Chennai, India
     *
     * @return AkamaiCloudRegion
     */
    public static function IN_MAA()
    {
        return new AkamaiCloudRegion(self::IN_MAA);
    }

    /**
     * Milan, Italy
     *
     * @return AkamaiCloudRegion
     */
    public static function IT_MIL()
    {
        return new AkamaiCloudRegion(self::IT_MIL);
    }

    /**
     * Osaka, Japan
     *
     * @return AkamaiCloudRegion
     */
    public static function JP_OSA()
    {
        return new AkamaiCloudRegion(self::JP_OSA);
    }

    /**
     * Amsterdam, Netherlands
     *
     * @return AkamaiCloudRegion
     */
    public static function NL_AMS()
    {
        return new AkamaiCloudRegion(self::NL_AMS);
    }

    /**
     * Stockholm, Sweden
     *
     * @return AkamaiCloudRegion
     */
    public static function SE_STO()
    {
        return new AkamaiCloudRegion(self::SE_STO);
    }

    /**
     * Los Angeles, USA
     *
     * @return AkamaiCloudRegion
     */
    public static function US_LAX()
    {
        return new AkamaiCloudRegion(self::US_LAX);
    }

    /**
     * Miami, USA
     *
     * @return AkamaiCloudRegion
     */
    public static function US_MIA()
    {
        return new AkamaiCloudRegion(self::US_MIA);
    }

    /**
     * Chicago, USA
     *
     * @return AkamaiCloudRegion
     */
    public static function US_ORD()
    {
        return new AkamaiCloudRegion(self::US_ORD);
    }

    /**
     * Seattle, USA
     *
     * @return AkamaiCloudRegion
     */
    public static function US_SEA()
    {
        return new AkamaiCloudRegion(self::US_SEA);
    }
}

