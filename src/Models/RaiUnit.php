<?php

namespace BitmovinApiSdk\Models;

class RaiUnit extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const ALL_PES_PACKETS = 'ALL_PES_PACKETS';

    /** @var string */
    private const ACQUISITION_POINT_PACKETS = 'ACQUISITION_POINT_PACKETS';

    /** @var string */
    private const ACCORDING_TO_INPUT = 'ACCORDING_TO_INPUT';

    /**
     * @param string $value
     * @return RaiUnit
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Never set RAI.
     *
     * @return RaiUnit
     */
    public static function NONE()
    {
        return new RaiUnit(self::NONE);
    }

    /**
     * Set RAI in all PES packets.
     *
     * @return RaiUnit
     */
    public static function ALL_PES_PACKETS()
    {
        return new RaiUnit(self::ALL_PES_PACKETS);
    }

    /**
     * Set RAI if packet is marked acquisition point.
     *
     * @return RaiUnit
     */
    public static function ACQUISITION_POINT_PACKETS()
    {
        return new RaiUnit(self::ACQUISITION_POINT_PACKETS);
    }

    /**
     * Set RAI according to instructions in input file.
     *
     * @return RaiUnit
     */
    public static function ACCORDING_TO_INPUT()
    {
        return new RaiUnit(self::ACCORDING_TO_INPUT);
    }
}

