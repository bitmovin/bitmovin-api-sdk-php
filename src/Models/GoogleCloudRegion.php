<?php

namespace BitmovinApiSdk\Models;

class GoogleCloudRegion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const US_CENTRAL_1 = 'US_CENTRAL_1';

    /** @var string */
    private const US_EAST_1 = 'US_EAST_1';

    /** @var string */
    private const ASIA_EAST_1 = 'ASIA_EAST_1';

    /** @var string */
    private const EUROPE_WEST_1 = 'EUROPE_WEST_1';

    /** @var string */
    private const US_WEST_1 = 'US_WEST_1';

    /** @var string */
    private const ASIA_EAST_2 = 'ASIA_EAST_2';

    /** @var string */
    private const ASIA_NORTHEAST_1 = 'ASIA_NORTHEAST_1';

    /** @var string */
    private const ASIA_SOUTH_1 = 'ASIA_SOUTH_1';

    /** @var string */
    private const ASIA_SOUTHEAST_1 = 'ASIA_SOUTHEAST_1';

    /** @var string */
    private const AUSTRALIA_SOUTHEAST_1 = 'AUSTRALIA_SOUTHEAST_1';

    /** @var string */
    private const EUROPE_NORTH_1 = 'EUROPE_NORTH_1';

    /** @var string */
    private const EUROPE_WEST_2 = 'EUROPE_WEST_2';

    /** @var string */
    private const EUROPE_WEST_3 = 'EUROPE_WEST_3';

    /** @var string */
    private const EUROPE_WEST_4 = 'EUROPE_WEST_4';

    /** @var string */
    private const NORTHAMERICA_NORTHEAST_1 = 'NORTHAMERICA_NORTHEAST_1';

    /** @var string */
    private const SOUTHAMERICA_EAST_1 = 'SOUTHAMERICA_EAST_1';

    /** @var string */
    private const US_EAST_4 = 'US_EAST_4';

    /** @var string */
    private const US_WEST_2 = 'US_WEST_2';

    /** @var string */
    private const ME_CENTRAL_2 = 'ME_CENTRAL_2';

    /**
     * @param string $value
     * @return GoogleCloudRegion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Council Bluffs, Iowa, USA
     *
     * @return GoogleCloudRegion
     */
    public static function US_CENTRAL_1()
    {
        return new GoogleCloudRegion(self::US_CENTRAL_1);
    }

    /**
     * Moncks Corner, South Carolina, USA
     *
     * @return GoogleCloudRegion
     */
    public static function US_EAST_1()
    {
        return new GoogleCloudRegion(self::US_EAST_1);
    }

    /**
     * Changhua County, Taiwan
     *
     * @return GoogleCloudRegion
     */
    public static function ASIA_EAST_1()
    {
        return new GoogleCloudRegion(self::ASIA_EAST_1);
    }

    /**
     * St. Ghislain, Belgium
     *
     * @return GoogleCloudRegion
     */
    public static function EUROPE_WEST_1()
    {
        return new GoogleCloudRegion(self::EUROPE_WEST_1);
    }

    /**
     * The Dalles, Oregon, USA
     *
     * @return GoogleCloudRegion
     */
    public static function US_WEST_1()
    {
        return new GoogleCloudRegion(self::US_WEST_1);
    }

    /**
     * Hong Kong
     *
     * @return GoogleCloudRegion
     */
    public static function ASIA_EAST_2()
    {
        return new GoogleCloudRegion(self::ASIA_EAST_2);
    }

    /**
     * Tokyo, Japan
     *
     * @return GoogleCloudRegion
     */
    public static function ASIA_NORTHEAST_1()
    {
        return new GoogleCloudRegion(self::ASIA_NORTHEAST_1);
    }

    /**
     * Mumbai, India
     *
     * @return GoogleCloudRegion
     */
    public static function ASIA_SOUTH_1()
    {
        return new GoogleCloudRegion(self::ASIA_SOUTH_1);
    }

    /**
     * Jurong West, Singapore
     *
     * @return GoogleCloudRegion
     */
    public static function ASIA_SOUTHEAST_1()
    {
        return new GoogleCloudRegion(self::ASIA_SOUTHEAST_1);
    }

    /**
     * Sydney, Australia
     *
     * @return GoogleCloudRegion
     */
    public static function AUSTRALIA_SOUTHEAST_1()
    {
        return new GoogleCloudRegion(self::AUSTRALIA_SOUTHEAST_1);
    }

    /**
     * Hamina, Finland
     *
     * @return GoogleCloudRegion
     */
    public static function EUROPE_NORTH_1()
    {
        return new GoogleCloudRegion(self::EUROPE_NORTH_1);
    }

    /**
     * London, England, UK
     *
     * @return GoogleCloudRegion
     */
    public static function EUROPE_WEST_2()
    {
        return new GoogleCloudRegion(self::EUROPE_WEST_2);
    }

    /**
     * Frankfurt, Germany
     *
     * @return GoogleCloudRegion
     */
    public static function EUROPE_WEST_3()
    {
        return new GoogleCloudRegion(self::EUROPE_WEST_3);
    }

    /**
     * Eemshaven, Netherlands
     *
     * @return GoogleCloudRegion
     */
    public static function EUROPE_WEST_4()
    {
        return new GoogleCloudRegion(self::EUROPE_WEST_4);
    }

    /**
     * Montréal, Québec, Canada
     *
     * @return GoogleCloudRegion
     */
    public static function NORTHAMERICA_NORTHEAST_1()
    {
        return new GoogleCloudRegion(self::NORTHAMERICA_NORTHEAST_1);
    }

    /**
     * São Paulo, Brazil
     *
     * @return GoogleCloudRegion
     */
    public static function SOUTHAMERICA_EAST_1()
    {
        return new GoogleCloudRegion(self::SOUTHAMERICA_EAST_1);
    }

    /**
     * Ashburn, Northern Virginia, USA
     *
     * @return GoogleCloudRegion
     */
    public static function US_EAST_4()
    {
        return new GoogleCloudRegion(self::US_EAST_4);
    }

    /**
     * Los Angeles, California, USA
     *
     * @return GoogleCloudRegion
     */
    public static function US_WEST_2()
    {
        return new GoogleCloudRegion(self::US_WEST_2);
    }

    /**
     * Dammam, Saudi Arabia
     *
     * @return GoogleCloudRegion
     */
    public static function ME_CENTRAL_2()
    {
        return new GoogleCloudRegion(self::ME_CENTRAL_2);
    }
}

