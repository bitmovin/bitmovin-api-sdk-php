<?php

namespace BitmovinApiSdk\Models;

class AzureCloudRegion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AUSTRALIA_EAST = 'AUSTRALIA_EAST';

    /** @var string */
    private const AUSTRALIA_SOUTHEAST = 'AUSTRALIA_SOUTHEAST';

    /** @var string */
    private const EUROPE_NORTH = 'EUROPE_NORTH';

    /** @var string */
    private const EUROPE_WEST = 'EUROPE_WEST';

    /** @var string */
    private const GERMANY_WESTCENTRAL = 'GERMANY_WESTCENTRAL';

    /** @var string */
    private const UAE_NORTH = 'UAE_NORTH';

    /** @var string */
    private const US_EAST = 'US_EAST';

    /** @var string */
    private const US_WEST2 = 'US_WEST2';

    /**
     * @param string $value
     * @return AzureCloudRegion
     */
    public static function create(string $value)
    {
        return new static($value);
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
     * Frankfurt
     *
     * @return AzureCloudRegion
     */
    public static function GERMANY_WESTCENTRAL()
    {
        return new AzureCloudRegion(self::GERMANY_WESTCENTRAL);
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
     * Virginia
     *
     * @return AzureCloudRegion
     */
    public static function US_EAST()
    {
        return new AzureCloudRegion(self::US_EAST);
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
}

