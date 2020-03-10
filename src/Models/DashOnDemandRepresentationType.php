<?php

namespace BitmovinApiSdk\Models;

class DashOnDemandRepresentationType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SEGMENT_BASE = 'SEGMENT_BASE';

    /** @var string */
    private const SEGMENT_LIST = 'SEGMENT_LIST';

    /**
     * @param string $value
     * @return DashOnDemandRepresentationType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Generates a SegmentBase representation
     *
     * @return DashOnDemandRepresentationType
     */
    public static function SEGMENT_BASE()
    {
        return new DashOnDemandRepresentationType(self::SEGMENT_BASE);
    }

    /**
     * Generates a SegmentList representation
     *
     * @return DashOnDemandRepresentationType
     */
    public static function SEGMENT_LIST()
    {
        return new DashOnDemandRepresentationType(self::SEGMENT_LIST);
    }
}

