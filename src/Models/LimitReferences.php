<?php

namespace BitmovinApiSdk\Models;

class LimitReferences extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const DEPTH = 'DEPTH';

    /** @var string */
    private const CU = 'CU';

    /** @var string */
    private const DEPTH_AND_CU = 'DEPTH_AND_CU';

    /**
     * @param string $value
     * @return LimitReferences
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Disables limiting references
     *
     * @return LimitReferences
     */
    public static function DISABLED()
    {
        return new LimitReferences(self::DISABLED);
    }

    /**
     * Will limit the references analyzed at the current depth based on the references used to code the 4 sub-blocks at the next depth.
     *
     * @return LimitReferences
     */
    public static function DEPTH()
    {
        return new LimitReferences(self::DEPTH);
    }

    /**
     * The rectangular and asymmetrical partitions will only use references selected by the 2Nx2N motion search.
     *
     * @return LimitReferences
     */
    public static function CU()
    {
        return new LimitReferences(self::CU);
    }

    /**
     * The 2Nx2N motion search at each depth will only use references from the split CUs and the rect/amp motion searches at that depth will only use the reference(s) selected by 2Nx2N.
     *
     * @return LimitReferences
     */
    public static function DEPTH_AND_CU()
    {
        return new LimitReferences(self::DEPTH_AND_CU);
    }
}

