<?php

namespace BitmovinApiSdk\Models;

class DashRepresentationType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const TEMPLATE = 'TEMPLATE';

    /** @var string */
    private const LIST = 'LIST';

    /** @var string */
    private const TIMELINE = 'TIMELINE';

    /**
     * @param string $value
     * @return DashRepresentationType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Generates a SegmentTemplate which will be positioned under the representation
     *
     * @return DashRepresentationType
     */
    public static function TEMPLATE()
    {
        return new DashRepresentationType(self::TEMPLATE);
    }

    /**
     * Generates a SegmentList based representation
     *
     * @return DashRepresentationType
     */
    public static function LIST()
    {
        return new DashRepresentationType(self::LIST);
    }

    /**
     * Generates a SegmentTimeline based representation
     *
     * @return DashRepresentationType
     */
    public static function TIMELINE()
    {
        return new DashRepresentationType(self::TIMELINE);
    }
}

