<?php

namespace BitmovinApiSdk\Models;

class PccHdrConfidence extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const EVIDENCE = 'evidence';

    /** @var string */
    private const CLAIM = 'claim';

    /** @var string */
    private const UNESTABLISHED = 'unestablished';

    /**
     * @param string $value
     * @return PccHdrConfidence
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Which instrument established the picture, where anything did.
     *
     * @return PccHdrConfidence
     */
    public static function EVIDENCE()
    {
        return new PccHdrConfidence(self::EVIDENCE);
    }

    /**
     * Which instrument established the picture, where anything did.
     *
     * @return PccHdrConfidence
     */
    public static function CLAIM()
    {
        return new PccHdrConfidence(self::CLAIM);
    }

    /**
     * Which instrument established the picture, where anything did.
     *
     * @return PccHdrConfidence
     */
    public static function UNESTABLISHED()
    {
        return new PccHdrConfidence(self::UNESTABLISHED);
    }
}

