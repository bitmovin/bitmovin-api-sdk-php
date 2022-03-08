<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingLiveCloudRegion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NORTH_AMERICA = 'NORTH_AMERICA';

    /** @var string */
    private const SOUTH_AMERICA = 'SOUTH_AMERICA';

    /** @var string */
    private const EUROPE = 'EUROPE';

    /** @var string */
    private const AFRICA = 'AFRICA';

    /** @var string */
    private const ASIA = 'ASIA';

    /** @var string */
    private const AUSTRALIA = 'AUSTRALIA';

    /**
     * @param string $value
     * @return SimpleEncodingLiveCloudRegion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The Live Encoding will be executed in the North America region
     *
     * @return SimpleEncodingLiveCloudRegion
     */
    public static function NORTH_AMERICA()
    {
        return new SimpleEncodingLiveCloudRegion(self::NORTH_AMERICA);
    }

    /**
     * The Live Encoding will be executed in the South America region
     *
     * @return SimpleEncodingLiveCloudRegion
     */
    public static function SOUTH_AMERICA()
    {
        return new SimpleEncodingLiveCloudRegion(self::SOUTH_AMERICA);
    }

    /**
     * The Live Encoding will be executed in the Europe region
     *
     * @return SimpleEncodingLiveCloudRegion
     */
    public static function EUROPE()
    {
        return new SimpleEncodingLiveCloudRegion(self::EUROPE);
    }

    /**
     * The Live Encoding will be executed in the Africa region
     *
     * @return SimpleEncodingLiveCloudRegion
     */
    public static function AFRICA()
    {
        return new SimpleEncodingLiveCloudRegion(self::AFRICA);
    }

    /**
     * The Live Encoding will be executed in the Asia region
     *
     * @return SimpleEncodingLiveCloudRegion
     */
    public static function ASIA()
    {
        return new SimpleEncodingLiveCloudRegion(self::ASIA);
    }

    /**
     * The Live Encoding will be executed in the Australia region
     *
     * @return SimpleEncodingLiveCloudRegion
     */
    public static function AUSTRALIA()
    {
        return new SimpleEncodingLiveCloudRegion(self::AUSTRALIA);
    }
}

