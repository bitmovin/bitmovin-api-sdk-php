<?php

namespace BitmovinApiSdk\Models;

class H264SubMe extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const FULLPEL = 'FULLPEL';

    /** @var string */
    private const SAD = 'SAD';

    /** @var string */
    private const SATD = 'SATD';

    /** @var string */
    private const QPEL3 = 'QPEL3';

    /** @var string */
    private const QPEL4 = 'QPEL4';

    /** @var string */
    private const QPEL5 = 'QPEL5';

    /** @var string */
    private const RD_IP = 'RD_IP';

    /** @var string */
    private const RD_ALL = 'RD_ALL';

    /** @var string */
    private const RD_REF_IP = 'RD_REF_IP';

    /** @var string */
    private const RD_REF_ALL = 'RD_REF_ALL';

    /**
     * @param string $value
     * @return H264SubMe
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * fullpel only (not recommended)
     *
     * @return H264SubMe
     */
    public static function FULLPEL()
    {
        return new H264SubMe(self::FULLPEL);
    }

    /**
     * SAD mode decision, one qpel iteration
     *
     * @return H264SubMe
     */
    public static function SAD()
    {
        return new H264SubMe(self::SAD);
    }

    /**
     * SATD mode decision
     *
     * @return H264SubMe
     */
    public static function SATD()
    {
        return new H264SubMe(self::SATD);
    }

    /**
     * Progressively more qpel
     *
     * @return H264SubMe
     */
    public static function QPEL3()
    {
        return new H264SubMe(self::QPEL3);
    }

    /**
     * Progressively more qpel
     *
     * @return H264SubMe
     */
    public static function QPEL4()
    {
        return new H264SubMe(self::QPEL4);
    }

    /**
     * Progressively more qpel
     *
     * @return H264SubMe
     */
    public static function QPEL5()
    {
        return new H264SubMe(self::QPEL5);
    }

    /**
     * RD mode decision for I/P+frames
     *
     * @return H264SubMe
     */
    public static function RD_IP()
    {
        return new H264SubMe(self::RD_IP);
    }

    /**
     * RD mode decision for all frames
     *
     * @return H264SubMe
     */
    public static function RD_ALL()
    {
        return new H264SubMe(self::RD_ALL);
    }

    /**
     * RD refinement for I/P+frames
     *
     * @return H264SubMe
     */
    public static function RD_REF_IP()
    {
        return new H264SubMe(self::RD_REF_IP);
    }

    /**
     * RD refinement for all frames
     *
     * @return H264SubMe
     */
    public static function RD_REF_ALL()
    {
        return new H264SubMe(self::RD_REF_ALL);
    }
}

