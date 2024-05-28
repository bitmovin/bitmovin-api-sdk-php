<?php

namespace BitmovinApiSdk\Models;

class AzureCloudRegion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ASIA_EAST = 'ASIA_EAST';

    /** @var string */
    private const ASIA_SOUTHEAST = 'ASIA_SOUTHEAST';

    /** @var string */
    private const AUSTRALIA_EAST = 'AUSTRALIA_EAST';

    /** @var string */
    private const AUSTRALIA_SOUTHEAST = 'AUSTRALIA_SOUTHEAST';

    /** @var string */
    private const BRAZIL_SOUTH = 'BRAZIL_SOUTH';

    /** @var string */
    private const CANADA_CENTRAL = 'CANADA_CENTRAL';

    /** @var string */
    private const EUROPE_NORTH = 'EUROPE_NORTH';

    /** @var string */
    private const EUROPE_WEST = 'EUROPE_WEST';

    /** @var string */
    private const FRANCE_CENTRAL = 'FRANCE_CENTRAL';

    /** @var string */
    private const GERMANY_WESTCENTRAL = 'GERMANY_WESTCENTRAL';

    /** @var string */
    private const INDIA_CENTRAL = 'INDIA_CENTRAL';

    /** @var string */
    private const INDIA_SOUTH = 'INDIA_SOUTH';

    /** @var string */
    private const JAPAN_EAST = 'JAPAN_EAST';

    /** @var string */
    private const JAPAN_WEST = 'JAPAN_WEST';

    /** @var string */
    private const KOREA_CENTRAL = 'KOREA_CENTRAL';

    /** @var string */
    private const UAE_NORTH = 'UAE_NORTH';

    /** @var string */
    private const US_CENTRAL = 'US_CENTRAL';

    /** @var string */
    private const US_EAST = 'US_EAST';

    /** @var string */
    private const US_EAST2 = 'US_EAST2';

    /** @var string */
    private const US_WEST = 'US_WEST';

    /** @var string */
    private const US_WEST2 = 'US_WEST2';

    /** @var string */
    private const US_SOUTH_CENTRAL = 'US_SOUTH_CENTRAL';

    /** @var string */
    private const US_NORTH_CENTRAL = 'US_NORTH_CENTRAL';

    /** @var string */
    private const UK_SOUTH = 'UK_SOUTH';

    /**
     * @param string $value
     * @return AzureCloudRegion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Hong Kong
     *
     * @return AzureCloudRegion
     */
    public static function ASIA_EAST()
    {
        return new AzureCloudRegion(self::ASIA_EAST);
    }

    /**
     * Singapore
     *
     * @return AzureCloudRegion
     */
    public static function ASIA_SOUTHEAST()
    {
        return new AzureCloudRegion(self::ASIA_SOUTHEAST);
    }

    /**
     * New South Wales
     *
     * @return AzureCloudRegion
     */
    public static function AUSTRALIA_EAST()
    {
        return new AzureCloudRegion(self::AUSTRALIA_EAST);
    }

    /**
     * Victoria
     *
     * @return AzureCloudRegion
     */
    public static function AUSTRALIA_SOUTHEAST()
    {
        return new AzureCloudRegion(self::AUSTRALIA_SOUTHEAST);
    }

    /**
     * São Paulo
     *
     * @return AzureCloudRegion
     */
    public static function BRAZIL_SOUTH()
    {
        return new AzureCloudRegion(self::BRAZIL_SOUTH);
    }

    /**
     * Toronto
     *
     * @return AzureCloudRegion
     */
    public static function CANADA_CENTRAL()
    {
        return new AzureCloudRegion(self::CANADA_CENTRAL);
    }

    /**
     * Ireland
     *
     * @return AzureCloudRegion
     */
    public static function EUROPE_NORTH()
    {
        return new AzureCloudRegion(self::EUROPE_NORTH);
    }

    /**
     * Netherlands
     *
     * @return AzureCloudRegion
     */
    public static function EUROPE_WEST()
    {
        return new AzureCloudRegion(self::EUROPE_WEST);
    }

    /**
     * Paris
     *
     * @return AzureCloudRegion
     */
    public static function FRANCE_CENTRAL()
    {
        return new AzureCloudRegion(self::FRANCE_CENTRAL);
    }

    /**
     * Frankfurt
     *
     * @return AzureCloudRegion
     */
    public static function GERMANY_WESTCENTRAL()
    {
        return new AzureCloudRegion(self::GERMANY_WESTCENTRAL);
    }

    /**
     * Pune
     *
     * @return AzureCloudRegion
     */
    public static function INDIA_CENTRAL()
    {
        return new AzureCloudRegion(self::INDIA_CENTRAL);
    }

    /**
     * Chennai
     *
     * @return AzureCloudRegion
     */
    public static function INDIA_SOUTH()
    {
        return new AzureCloudRegion(self::INDIA_SOUTH);
    }

    /**
     * Tokyo, Saitama
     *
     * @return AzureCloudRegion
     */
    public static function JAPAN_EAST()
    {
        return new AzureCloudRegion(self::JAPAN_EAST);
    }

    /**
     * Osaka
     *
     * @return AzureCloudRegion
     */
    public static function JAPAN_WEST()
    {
        return new AzureCloudRegion(self::JAPAN_WEST);
    }

    /**
     * Seoul
     *
     * @return AzureCloudRegion
     */
    public static function KOREA_CENTRAL()
    {
        return new AzureCloudRegion(self::KOREA_CENTRAL);
    }

    /**
     * Dubai
     *
     * @return AzureCloudRegion
     */
    public static function UAE_NORTH()
    {
        return new AzureCloudRegion(self::UAE_NORTH);
    }

    /**
     * Iowa
     *
     * @return AzureCloudRegion
     */
    public static function US_CENTRAL()
    {
        return new AzureCloudRegion(self::US_CENTRAL);
    }

    /**
     * Virginia
     *
     * @return AzureCloudRegion
     */
    public static function US_EAST()
    {
        return new AzureCloudRegion(self::US_EAST);
    }

    /**
     * Virginia
     *
     * @return AzureCloudRegion
     */
    public static function US_EAST2()
    {
        return new AzureCloudRegion(self::US_EAST2);
    }

    /**
     * California
     *
     * @return AzureCloudRegion
     */
    public static function US_WEST()
    {
        return new AzureCloudRegion(self::US_WEST);
    }

    /**
     * Washington
     *
     * @return AzureCloudRegion
     */
    public static function US_WEST2()
    {
        return new AzureCloudRegion(self::US_WEST2);
    }

    /**
     * Texas
     *
     * @return AzureCloudRegion
     */
    public static function US_SOUTH_CENTRAL()
    {
        return new AzureCloudRegion(self::US_SOUTH_CENTRAL);
    }

    /**
     * Illinois
     *
     * @return AzureCloudRegion
     */
    public static function US_NORTH_CENTRAL()
    {
        return new AzureCloudRegion(self::US_NORTH_CENTRAL);
    }

    /**
     * London
     *
     * @return AzureCloudRegion
     */
    public static function UK_SOUTH()
    {
        return new AzureCloudRegion(self::UK_SOUTH);
    }
}

