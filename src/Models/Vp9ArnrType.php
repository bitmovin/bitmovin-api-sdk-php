<?php

namespace BitmovinApiSdk\Models;

class Vp9ArnrType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const BACKWARD = 'BACKWARD';

    /** @var string */
    private const FORWARD = 'FORWARD';

    /** @var string */
    private const CENTERED = 'CENTERED';

    /**
     * @param string $value
     * @return Vp9ArnrType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * altref noise reduction filter type
     *
     * @return Vp9ArnrType
     */
    public static function BACKWARD()
    {
        return new Vp9ArnrType(self::BACKWARD);
    }

    /**
     * altref noise reduction filter type
     *
     * @return Vp9ArnrType
     */
    public static function FORWARD()
    {
        return new Vp9ArnrType(self::FORWARD);
    }

    /**
     * altref noise reduction filter type
     *
     * @return Vp9ArnrType
     */
    public static function CENTERED()
    {
        return new Vp9ArnrType(self::CENTERED);
    }
}

