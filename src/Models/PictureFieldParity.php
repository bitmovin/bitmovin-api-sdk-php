<?php

namespace BitmovinApiSdk\Models;

class PictureFieldParity extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AUTO = 'AUTO';

    /** @var string */
    private const TOP_FIELD_FIRST = 'TOP_FIELD_FIRST';

    /** @var string */
    private const BOTTOM_FIELD_FIRST = 'BOTTOM_FIELD_FIRST';

    /**
     * @param string $value
     * @return PictureFieldParity
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Automatic detection of field parity
     *
     * @return PictureFieldParity
     */
    public static function AUTO()
    {
        return new PictureFieldParity(self::AUTO);
    }

    /**
     * Top field is first field
     *
     * @return PictureFieldParity
     */
    public static function TOP_FIELD_FIRST()
    {
        return new PictureFieldParity(self::TOP_FIELD_FIRST);
    }

    /**
     * Bottom field is first field
     *
     * @return PictureFieldParity
     */
    public static function BOTTOM_FIELD_FIRST()
    {
        return new PictureFieldParity(self::BOTTOM_FIELD_FIRST);
    }
}

