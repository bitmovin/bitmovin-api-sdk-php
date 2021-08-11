<?php

namespace BitmovinApiSdk\Models;

class DtsXChannelLayout extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CL_5_1 = '5.1';

    /** @var string */
    private const CL_5_1_4 = '5.1.4';

    /**
     * @param string $value
     * @return DtsXChannelLayout
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Channel Layout 5.1
     *
     * @return DtsXChannelLayout
     */
    public static function CL_5_1()
    {
        return new DtsXChannelLayout(self::CL_5_1);
    }

    /**
     * Channel Layout 5.1.4
     *
     * @return DtsXChannelLayout
     */
    public static function CL_5_1_4()
    {
        return new DtsXChannelLayout(self::CL_5_1_4);
    }
}

