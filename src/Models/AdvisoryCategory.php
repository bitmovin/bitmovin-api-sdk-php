<?php

namespace BitmovinApiSdk\Models;

class AdvisoryCategory extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const TOBACCO = 'TOBACCO';

    /** @var string */
    private const VAPE = 'VAPE';

    /**
     * @param string $value
     * @return AdvisoryCategory
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Tobacco imagery such as smoking, cigarettes, cigars, pipes, or tobacco products
     *
     * @return AdvisoryCategory
     */
    public static function TOBACCO()
    {
        return new AdvisoryCategory(self::TOBACCO);
    }

    /**
     * Vaping imagery such as e-cigarettes, vape pens, or their use
     *
     * @return AdvisoryCategory
     */
    public static function VAPE()
    {
        return new AdvisoryCategory(self::VAPE);
    }
}

