<?php

namespace BitmovinApiSdk\Models;

class EnhancedDeinterlaceParity extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const TOP_FIELD_FIRST = 'TOP_FIELD_FIRST';

    /** @var string */
    private const BOTTOM_FIELD_FIRST = 'BOTTOM_FIELD_FIRST';

    /**
     * @param string $value
     * @return EnhancedDeinterlaceParity
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Top field is first field
     *
     * @return EnhancedDeinterlaceParity
     */
    public static function TOP_FIELD_FIRST()
    {
        return new EnhancedDeinterlaceParity(self::TOP_FIELD_FIRST);
    }

    /**
     * Bottom field is first field
     *
     * @return EnhancedDeinterlaceParity
     */
    public static function BOTTOM_FIELD_FIRST()
    {
        return new EnhancedDeinterlaceParity(self::BOTTOM_FIELD_FIRST);
    }
}

