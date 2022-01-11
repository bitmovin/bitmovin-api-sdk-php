<?php

namespace BitmovinApiSdk\Models;

class PTSAlignMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ALIGN_ZERO_NEGATIVE_CTO = 'ALIGN_ZERO_NEGATIVE_CTO';

    /**
     * @param string $value
     * @return PTSAlignMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Align the initial PTS to zero using negative CTS offsets. This is achieved by using &#x60;trun&#x60; version 1 boxes in the mp4 fragments.
     *
     * @return PTSAlignMode
     */
    public static function ALIGN_ZERO_NEGATIVE_CTO()
    {
        return new PTSAlignMode(self::ALIGN_ZERO_NEGATIVE_CTO);
    }
}

