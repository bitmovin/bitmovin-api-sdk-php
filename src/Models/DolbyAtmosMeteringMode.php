<?php

namespace BitmovinApiSdk\Models;

class DolbyAtmosMeteringMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ITU_R_BS_1770_1 = 'ITU-R BS.1770-1';

    /** @var string */
    private const ITU_R_BS_1770_2 = 'ITU-R BS.1770-2';

    /** @var string */
    private const ITU_R_BS_1770_3 = 'ITU-R BS.1770-3';

    /** @var string */
    private const ITU_R_BS_1770_4 = 'ITU-R BS.1770-4';

    /** @var string */
    private const LEQ_A = 'Leq (A)';

    /**
     * @param string $value
     * @return DolbyAtmosMeteringMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * ITU-R BS.1770-1
     *
     * @return DolbyAtmosMeteringMode
     */
    public static function ITU_R_BS_1770_1()
    {
        return new DolbyAtmosMeteringMode(self::ITU_R_BS_1770_1);
    }

    /**
     * ITU-R BS.1770-2
     *
     * @return DolbyAtmosMeteringMode
     */
    public static function ITU_R_BS_1770_2()
    {
        return new DolbyAtmosMeteringMode(self::ITU_R_BS_1770_2);
    }

    /**
     * ITU-R BS.1770-3
     *
     * @return DolbyAtmosMeteringMode
     */
    public static function ITU_R_BS_1770_3()
    {
        return new DolbyAtmosMeteringMode(self::ITU_R_BS_1770_3);
    }

    /**
     * ITU-R BS.1770-4
     *
     * @return DolbyAtmosMeteringMode
     */
    public static function ITU_R_BS_1770_4()
    {
        return new DolbyAtmosMeteringMode(self::ITU_R_BS_1770_4);
    }

    /**
     * Leq (A)
     *
     * @return DolbyAtmosMeteringMode
     */
    public static function LEQ_A()
    {
        return new DolbyAtmosMeteringMode(self::LEQ_A);
    }
}

