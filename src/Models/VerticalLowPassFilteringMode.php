<?php

namespace BitmovinApiSdk\Models;

class VerticalLowPassFilteringMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const LOW_PASS = 'LOW_PASS';

    /** @var string */
    private const COMPLEX = 'COMPLEX';

    /**
     * @param string $value
     * @return VerticalLowPassFilteringMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Do not use vertical low pass filtering
     *
     * @return VerticalLowPassFilteringMode
     */
    public static function DISABLED()
    {
        return new VerticalLowPassFilteringMode(self::DISABLED);
    }

    /**
     * Recommended for progressive sources. Reduces Moire patterning and twitter
     *
     * @return VerticalLowPassFilteringMode
     */
    public static function LOW_PASS()
    {
        return new VerticalLowPassFilteringMode(self::LOW_PASS);
    }

    /**
     * Retaining better detail and sharpness, but less reduction in twitter
     *
     * @return VerticalLowPassFilteringMode
     */
    public static function COMPLEX()
    {
        return new VerticalLowPassFilteringMode(self::COMPLEX);
    }
}

