<?php

namespace BitmovinApiSdk\Models;

class Vp8ArnrType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const BACKWARD = 'BACKWARD';

    /** @var string */
    private const FORWARD = 'FORWARD';

    /** @var string */
    private const CENTERED = 'CENTERED';

    /**
     * @param string $value
     * @return Vp8ArnrType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * altref noise reduction filter type
     *
     * @return Vp8ArnrType
     */
    public static function BACKWARD()
    {
        return new Vp8ArnrType(self::BACKWARD);
    }

    /**
     * altref noise reduction filter type
     *
     * @return Vp8ArnrType
     */
    public static function FORWARD()
    {
        return new Vp8ArnrType(self::FORWARD);
    }

    /**
     * altref noise reduction filter type
     *
     * @return Vp8ArnrType
     */
    public static function CENTERED()
    {
        return new Vp8ArnrType(self::CENTERED);
    }
}

