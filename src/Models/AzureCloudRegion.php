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
    private const BRAZIL_SOUTHEAST = 'BRAZIL_SOUTHEAST';

    /** @var string */
    private const EUROPE_NORTH = 'EUROPE_NORTH';

    /** @var string */
    private const EUROPE_WEST = 'EUROPE_WEST';

    /** @var string */
    private const UK_SOUTH = 'UK_SOUTH';

    /** @var string */
    private const UK_WEST = 'UK_WEST';

    /** @var string */
    private const FRANCE_CENTRAL = 'FRANCE_CENTRAL';

    /** @var string */
    private const FRANCE_SOUTH = 'FRANCE_SOUTH';

    /** @var string */
    private const SWITZERLAND_NORTH = 'SWITZERLAND_NORTH';

    /** @var string */
    private const SWITZERLAND_WEST = 'SWITZERLAND_WEST';

    /** @var string */
    private const GERMANY_NORTH = 'GERMANY_NORTH';

    /** @var string */
    private const GERMANY_WESTCENTRAL = 'GERMANY_WESTCENTRAL';

    /** @var string */
    private const NORWAY_WEST = 'NORWAY_WEST';

    /** @var string */
    private const NORWAY_EAST = 'NORWAY_EAST';

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
    private const AUSTRALIA_CENTRAL = 'AUSTRALIA_CENTRAL';

    /** @var string */
    private const AUSTRALIA_CENTRAL2 = 'AUSTRALIA_CENTRAL2';

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
    private const UAE_CENTRAL = 'UAE_CENTRAL';

    /** @var string */
    private const UAE_NORTH = 'UAE_NORTH';

    /** @var string */
    private const SOUTHAFRICA_NORTH = 'SOUTHAFRICA_NORTH';

    /** @var string */
    private const SOUTHAFRICA_WEST = 'SOUTHAFRICA_WEST';

    /** @var string */
    private const CHINA_NORTH = 'CHINA_NORTH';

    /** @var string */
    private const CHINA_EAST = 'CHINA_EAST';

    /** @var string */
    private const CHINA_NORTH2 = 'CHINA_NORTH2';

    /** @var string */
    private const CHINA_EAST2 = 'CHINA_EAST2';

    /** @var string */
    private const GERMANY_CENTRAL = 'GERMANY_CENTRAL';

    /** @var string */
    private const GERMANY_NORTHEAST = 'GERMANY_NORTHEAST';

    /** @var string */
    private const GOV_US_VIRGINIA = 'GOV_US_VIRGINIA';

    /** @var string */
    private const GOV_US_IOWA = 'GOV_US_IOWA';

    /** @var string */
    private const GOV_US_ARIZONA = 'GOV_US_ARIZONA';

    /** @var string */
    private const GOV_US_TEXAS = 'GOV_US_TEXAS';

    /** @var string */
    private const GOV_US_DOD_EAST = 'GOV_US_DOD_EAST';

    /** @var string */
    private const GOV_US_DOD_CENTRAL = 'GOV_US_DOD_CENTRAL';

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
     * Rio de Janeiro - Reserved for Brazil South customers requiring scenario-based in-country disaster recovery
     *
     * @return AzureCloudRegion
     */
    public static function BRAZIL_SOUTHEAST()
    {
        return new AzureCloudRegion(self::BRAZIL_SOUTHEAST);
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
     * Paris
     *
     * @return AzureCloudRegion
     */
    public static function FRANCE_CENTRAL()
    {
        return new AzureCloudRegion(self::FRANCE_CENTRAL);
    }

    /**
     * Marseille - Reserved for France Central customers requiring in-country disaster recovery
     *
     * @return AzureCloudRegion
     */
    public static function FRANCE_SOUTH()
    {
        return new AzureCloudRegion(self::FRANCE_SOUTH);
    }

    /**
     * Zürich
     *
     * @return AzureCloudRegion
     */
    public static function SWITZERLAND_NORTH()
    {
        return new AzureCloudRegion(self::SWITZERLAND_NORTH);
    }

    /**
     * Geneva - Reserved for Switzerland North customers requiring in-country disaster recovery
     *
     * @return AzureCloudRegion
     */
    public static function SWITZERLAND_WEST()
    {
        return new AzureCloudRegion(self::SWITZERLAND_WEST);
    }

    /**
     * Berlin - Reserved for Germany West Central customers requiring in-country disaster recovery
     *
     * @return AzureCloudRegion
     */
    public static function GERMANY_NORTH()
    {
        return new AzureCloudRegion(self::GERMANY_NORTH);
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
     * Stavanger - Reserved for Norway East customers requiring in-country diaster recovery
     *
     * @return AzureCloudRegion
     */
    public static function NORWAY_WEST()
    {
        return new AzureCloudRegion(self::NORWAY_WEST);
    }

    /**
     * Oslo
     *
     * @return AzureCloudRegion
     */
    public static function NORWAY_EAST()
    {
        return new AzureCloudRegion(self::NORWAY_EAST);
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
     * Canberra
     *
     * @return AzureCloudRegion
     */
    public static function AUSTRALIA_CENTRAL()
    {
        return new AzureCloudRegion(self::AUSTRALIA_CENTRAL);
    }

    /**
     * Canberra - Reserved for Australia Central customers requiring in-country disaster recovery
     *
     * @return AzureCloudRegion
     */
    public static function AUSTRALIA_CENTRAL2()
    {
        return new AzureCloudRegion(self::AUSTRALIA_CENTRAL2);
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
     * Abu Dhabi - Reserved for UAE North customers requiring in-country disaster recovery
     *
     * @return AzureCloudRegion
     */
    public static function UAE_CENTRAL()
    {
        return new AzureCloudRegion(self::UAE_CENTRAL);
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
     * Johannesburg
     *
     * @return AzureCloudRegion
     */
    public static function SOUTHAFRICA_NORTH()
    {
        return new AzureCloudRegion(self::SOUTHAFRICA_NORTH);
    }

    /**
     * Cape Town - Reserved for South Africa North customers requiring in-country disaster recovery
     *
     * @return AzureCloudRegion
     */
    public static function SOUTHAFRICA_WEST()
    {
        return new AzureCloudRegion(self::SOUTHAFRICA_WEST);
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
     * Beijing
     *
     * @return AzureCloudRegion
     */
    public static function CHINA_NORTH2()
    {
        return new AzureCloudRegion(self::CHINA_NORTH2);
    }

    /**
     * Shanghai
     *
     * @return AzureCloudRegion
     */
    public static function CHINA_EAST2()
    {
        return new AzureCloudRegion(self::CHINA_EAST2);
    }

    /**
     * Frankfurt - No longer listed by https://azure.microsoft.com/en-us/global-infrastructure/data-residency
     *
     * @return AzureCloudRegion
     */
    public static function GERMANY_CENTRAL()
    {
        return new AzureCloudRegion(self::GERMANY_CENTRAL);
    }

    /**
     * Magdeburg - No longer listed by https://azure.microsoft.com/en-us/global-infrastructure/data-residency
     *
     * @return AzureCloudRegion
     */
    public static function GERMANY_NORTHEAST()
    {
        return new AzureCloudRegion(self::GERMANY_NORTHEAST);
    }

    /**
     * US Government Virginia - Reserved for US government entities and their partners only
     *
     * @return AzureCloudRegion
     */
    public static function GOV_US_VIRGINIA()
    {
        return new AzureCloudRegion(self::GOV_US_VIRGINIA);
    }

    /**
     * US Government Iowa - Reserved for US government entities and their partners only
     *
     * @return AzureCloudRegion
     */
    public static function GOV_US_IOWA()
    {
        return new AzureCloudRegion(self::GOV_US_IOWA);
    }

    /**
     * US Government Arizona - Reserved for US government entities and their partners only
     *
     * @return AzureCloudRegion
     */
    public static function GOV_US_ARIZONA()
    {
        return new AzureCloudRegion(self::GOV_US_ARIZONA);
    }

    /**
     * US Government Texas - Reserved for US government entities and their partners only
     *
     * @return AzureCloudRegion
     */
    public static function GOV_US_TEXAS()
    {
        return new AzureCloudRegion(self::GOV_US_TEXAS);
    }

    /**
     * Virginia - Reserved for exclusive use by the Department of Defense
     *
     * @return AzureCloudRegion
     */
    public static function GOV_US_DOD_EAST()
    {
        return new AzureCloudRegion(self::GOV_US_DOD_EAST);
    }

    /**
     * Iowa - Reserved for exclusive use by the Department of Defense
     *
     * @return AzureCloudRegion
     */
    public static function GOV_US_DOD_CENTRAL()
    {
        return new AzureCloudRegion(self::GOV_US_DOD_CENTRAL);
    }
}

