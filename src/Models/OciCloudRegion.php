<?php

namespace BitmovinApiSdk\Models;

class OciCloudRegion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const EU_FRANKFURT_1 = 'EU_FRANKFURT_1';

    /** @var string */
    private const US_ASHBURN_1 = 'US_ASHBURN_1';

    /**
     * @param string $value
     * @return OciCloudRegion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Frankfurt, Germany
     *
     * @return OciCloudRegion
     */
    public static function EU_FRANKFURT_1()
    {
        return new OciCloudRegion(self::EU_FRANKFURT_1);
    }

    /**
     * Ashburn, Virginia, USA
     *
     * @return OciCloudRegion
     */
    public static function US_ASHBURN_1()
    {
        return new OciCloudRegion(self::US_ASHBURN_1);
    }
}

