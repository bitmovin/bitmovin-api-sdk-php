<?php

namespace BitmovinApiSdk\Models;

class AzureCloudRegion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const US_WEST = 'US_WEST';

    /** @var string */
    private const US_WEST2 = 'US_WEST2';

    /** @var string */
    private const US_CENTRAL = 'US_CENTRAL';

    /** @var string */
    private const US_EAST = 'US_EAST';

    /** @var string */
    private const US_EAST2 = 'US_EAST2';

    /** @var string */
    private const US_NORTH_CENTRAL = 'US_NORTH_CENTRAL';

    /** @var string */
    private const US_SOUTH_CENTRAL = 'US_SOUTH_CENTRAL';

    /** @var string */
    private const US_WEST_CENTRAL = 'US_WEST_CENTRAL';

    /** @var string */
    private const CANADA_CENTRAL = 'CANADA_CENTRAL';

    /** @var string */
    private const CANADA_EAST = 'CANADA_EAST';

    /** @var string */
    private const BRAZIL_SOUTH = 'BRAZIL_SOUTH';

    /** @var string */
    private const EUROPE_NORTH = 'EUROPE_NORTH';

    /** @var string */
    private const EUROPE_WEST = 'EUROPE_WEST';

    /** @var string */
    private const UK_SOUTH = 'UK_SOUTH';

    /** @var string */
    private const UK_WEST = 'UK_WEST';

    /** @var string */
    private const ASIA_EAST = 'ASIA_EAST';

    /** @var string */
    private const ASIA_SOUTHEAST = 'ASIA_SOUTHEAST';

    /** @var string */
    private const JAPAN_EAST = 'JAPAN_EAST';

    /** @var string */
    private const JAPAN_WEST = 'JAPAN_WEST';

    /** @var string */
    private const AUSTRALIA_EAST = 'AUSTRALIA_EAST';

    /** @var string */
    private const AUSTRALIA_SOUTHEAST = 'AUSTRALIA_SOUTHEAST';

    /** @var string */
    private const INDIA_CENTRAL = 'INDIA_CENTRAL';

    /** @var string */
    private const INDIA_SOUTH = 'INDIA_SOUTH';

    /** @var string */
    private const INDIA_WEST = 'INDIA_WEST';

    /** @var string */
    private const KOREA_CENTRAL = 'KOREA_CENTRAL';

    /** @var string */
    private const KOREA_SOUTH = 'KOREA_SOUTH';

    /** @var string */
    private const CHINA_NORTH = 'CHINA_NORTH';

    /** @var string */
    private const CHINA_EAST = 'CHINA_EAST';

    /** @var string */
    private const GERMANY_CENTRAL = 'GERMANY_CENTRAL';

    /** @var string */
    private const GERMANY_NORTHEAST = 'GERMANY_NORTHEAST';

    /** @var string */
    private const GOV_US_VIRGINIA = 'GOV_US_VIRGINIA';

    /** @var string */
    private const GOV_US_IOWA = 'GOV_US_IOWA';

    /**
     * @param string $value
     * @return AzureCloudRegion
     */
    public static function create(string $value)
    {
        return new static($value);
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
     * Iowa
     *
     * @return AzureCloudRegion
     */
    public static function US_CENTRAL()
    {
        return new AzureCloudRegion(self::US_CENTRAL);
    }

    /**
     * US_EAST
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
     * Illinois
     *
     * @return AzureCloudRegion
     */
    public static function US_NORTH_CENTRAL()
    {
        return new AzureCloudRegion(self::US_NORTH_CENTRAL);
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
     * Wyoming
     *
     * @return AzureCloudRegion
     */
    public static function US_WEST_CENTRAL()
    {
        return new AzureCloudRegion(self::US_WEST_CENTRAL);
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
     * Quebec City
     *
     * @return AzureCloudRegion
     */
    public static function CANADA_EAST()
    {
        return new AzureCloudRegion(self::CANADA_EAST);
    }

    /**
     * São Paulo State
     *
     * @return AzureCloudRegion
     */
    public static function BRAZIL_SOUTH()
    {
        return new AzureCloudRegion(self::BRAZIL_SOUTH);
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
     * London
     *
     * @return AzureCloudRegion
     */
    public static function UK_SOUTH()
    {
        return new AzureCloudRegion(self::UK_SOUTH);
    }

    /**
     * Cardiff
     *
     * @return AzureCloudRegion
     */
    public static function UK_WEST()
    {
        return new AzureCloudRegion(self::UK_WEST);
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
     * Mumbai
     *
     * @return AzureCloudRegion
     */
    public static function INDIA_WEST()
    {
        return new AzureCloudRegion(self::INDIA_WEST);
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
     * Busan
     *
     * @return AzureCloudRegion
     */
    public static function KOREA_SOUTH()
    {
        return new AzureCloudRegion(self::KOREA_SOUTH);
    }

    /**
     * Beijing
     *
     * @return AzureCloudRegion
     */
    public static function CHINA_NORTH()
    {
        return new AzureCloudRegion(self::CHINA_NORTH);
    }

    /**
     * Shanghai
     *
     * @return AzureCloudRegion
     */
    public static function CHINA_EAST()
    {
        return new AzureCloudRegion(self::CHINA_EAST);
    }

    /**
     * Frankfurt
     *
     * @return AzureCloudRegion
     */
    public static function GERMANY_CENTRAL()
    {
        return new AzureCloudRegion(self::GERMANY_CENTRAL);
    }

    /**
     * Magdeburg
     *
     * @return AzureCloudRegion
     */
    public static function GERMANY_NORTHEAST()
    {
        return new AzureCloudRegion(self::GERMANY_NORTHEAST);
    }

    /**
     * Virginia
     *
     * @return AzureCloudRegion
     */
    public static function GOV_US_VIRGINIA()
    {
        return new AzureCloudRegion(self::GOV_US_VIRGINIA);
    }

    /**
     * Iowa
     *
     * @return AzureCloudRegion
     */
    public static function GOV_US_IOWA()
    {
        return new AzureCloudRegion(self::GOV_US_IOWA);
    }
}

