<?php

namespace BitmovinApiSdk\Models;

class H262InterlaceMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const TOP_FIELD_FIRST = 'TOP_FIELD_FIRST';

    /** @var string */
    private const BOTTOM_FIELD_FIRST = 'BOTTOM_FIELD_FIRST';

    /**
     * @param string $value
     * @return H262InterlaceMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Using TOP_FIELD_FIRST or BOTTOM_FIELD_FIRST will output interlaced video
     *
     * @return H262InterlaceMode
     */
    public static function NONE()
    {
        return new H262InterlaceMode(self::NONE);
    }

    /**
     * Using TOP_FIELD_FIRST or BOTTOM_FIELD_FIRST will output interlaced video
     *
     * @return H262InterlaceMode
     */
    public static function TOP_FIELD_FIRST()
    {
        return new H262InterlaceMode(self::TOP_FIELD_FIRST);
    }

    /**
     * Using TOP_FIELD_FIRST or BOTTOM_FIELD_FIRST will output interlaced video
     *
     * @return H262InterlaceMode
     */
    public static function BOTTOM_FIELD_FIRST()
    {
        return new H262InterlaceMode(self::BOTTOM_FIELD_FIRST);
    }
}

