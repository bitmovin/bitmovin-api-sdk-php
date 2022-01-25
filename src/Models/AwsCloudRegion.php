<?php

namespace BitmovinApiSdk\Models;

class AwsCloudRegion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const US_EAST_1 = 'US_EAST_1';

    /** @var string */
    private const US_EAST_2 = 'US_EAST_2';

    /** @var string */
    private const US_WEST_1 = 'US_WEST_1';

    /** @var string */
    private const US_WEST_2 = 'US_WEST_2';

    /** @var string */
    private const EU_WEST_1 = 'EU_WEST_1';

    /** @var string */
    private const EU_CENTRAL_1 = 'EU_CENTRAL_1';

    /** @var string */
    private const AP_SOUTHEAST_1 = 'AP_SOUTHEAST_1';

    /** @var string */
    private const AP_SOUTHEAST_2 = 'AP_SOUTHEAST_2';

    /** @var string */
    private const AP_NORTHEAST_1 = 'AP_NORTHEAST_1';

    /** @var string */
    private const AP_NORTHEAST_2 = 'AP_NORTHEAST_2';

    /** @var string */
    private const AP_SOUTH_1 = 'AP_SOUTH_1';

    /** @var string */
    private const SA_EAST_1 = 'SA_EAST_1';

    /** @var string */
    private const EU_WEST_2 = 'EU_WEST_2';

    /** @var string */
    private const EU_WEST_3 = 'EU_WEST_3';

    /** @var string */
    private const CA_CENTRAL_1 = 'CA_CENTRAL_1';

    /** @var string */
    private const EU_NORTH_1 = 'EU_NORTH_1';

    /**
     * @param string $value
     * @return AwsCloudRegion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * US East (N. Virginia)
     *
     * @return AwsCloudRegion
     */
    public static function US_EAST_1()
    {
        return new AwsCloudRegion(self::US_EAST_1);
    }

    /**
     * US East (Ohio)
     *
     * @return AwsCloudRegion
     */
    public static function US_EAST_2()
    {
        return new AwsCloudRegion(self::US_EAST_2);
    }

    /**
     * US West (N. California)
     *
     * @return AwsCloudRegion
     */
    public static function US_WEST_1()
    {
        return new AwsCloudRegion(self::US_WEST_1);
    }

    /**
     * US West (Oregon)
     *
     * @return AwsCloudRegion
     */
    public static function US_WEST_2()
    {
        return new AwsCloudRegion(self::US_WEST_2);
    }

    /**
     * Europe (Ireland)
     *
     * @return AwsCloudRegion
     */
    public static function EU_WEST_1()
    {
        return new AwsCloudRegion(self::EU_WEST_1);
    }

    /**
     * Europe (Frankfurt)
     *
     * @return AwsCloudRegion
     */
    public static function EU_CENTRAL_1()
    {
        return new AwsCloudRegion(self::EU_CENTRAL_1);
    }

    /**
     * Asia Pacific (Singapore)
     *
     * @return AwsCloudRegion
     */
    public static function AP_SOUTHEAST_1()
    {
        return new AwsCloudRegion(self::AP_SOUTHEAST_1);
    }

    /**
     * Asia Pacific (Sydney)
     *
     * @return AwsCloudRegion
     */
    public static function AP_SOUTHEAST_2()
    {
        return new AwsCloudRegion(self::AP_SOUTHEAST_2);
    }

    /**
     * Asia Pacific (Tokyo)
     *
     * @return AwsCloudRegion
     */
    public static function AP_NORTHEAST_1()
    {
        return new AwsCloudRegion(self::AP_NORTHEAST_1);
    }

    /**
     * Asia Pacific (Seoul)
     *
     * @return AwsCloudRegion
     */
    public static function AP_NORTHEAST_2()
    {
        return new AwsCloudRegion(self::AP_NORTHEAST_2);
    }

    /**
     * Asia Pacific (Mumbai)
     *
     * @return AwsCloudRegion
     */
    public static function AP_SOUTH_1()
    {
        return new AwsCloudRegion(self::AP_SOUTH_1);
    }

    /**
     * South America (São Paulo)
     *
     * @return AwsCloudRegion
     */
    public static function SA_EAST_1()
    {
        return new AwsCloudRegion(self::SA_EAST_1);
    }

    /**
     * Europe (London)
     *
     * @return AwsCloudRegion
     */
    public static function EU_WEST_2()
    {
        return new AwsCloudRegion(self::EU_WEST_2);
    }

    /**
     * Europe (Paris)
     *
     * @return AwsCloudRegion
     */
    public static function EU_WEST_3()
    {
        return new AwsCloudRegion(self::EU_WEST_3);
    }

    /**
     * Canada (Central)
     *
     * @return AwsCloudRegion
     */
    public static function CA_CENTRAL_1()
    {
        return new AwsCloudRegion(self::CA_CENTRAL_1);
    }

    /**
     * Europe (Stockholm)
     *
     * @return AwsCloudRegion
     */
    public static function EU_NORTH_1()
    {
        return new AwsCloudRegion(self::EU_NORTH_1);
    }
}

