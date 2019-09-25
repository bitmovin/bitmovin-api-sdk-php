<?php

namespace BitmovinApiSdk\Models;

class InterlaceMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const TOP = 'TOP';

    /** @var string */
    private const BOTTOM = 'BOTTOM';

    /** @var string */
    private const DROP_EVEN = 'DROP_EVEN';

    /** @var string */
    private const DROP_ODD = 'DROP_ODD';

    /** @var string */
    private const PAD = 'PAD';

    /** @var string */
    private const INTERLACE_X2 = 'INTERLACE_X2';

    /** @var string */
    private const MERGE = 'MERGE';

    /** @var string */
    private const MERGE_X2 = 'MERGE_X2';

    /**
     * @param string $value
     * @return InterlaceMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Use the top field from odd frames and bottom field from even frames
     *
     * @return InterlaceMode
     */
    public static function TOP()
    {
        return new InterlaceMode(self::TOP);
    }

    /**
     * Use the bottom field from odd frames and top field from even frames
     *
     * @return InterlaceMode
     */
    public static function BOTTOM()
    {
        return new InterlaceMode(self::BOTTOM);
    }

    /**
     * Drop all even frames
     *
     * @return InterlaceMode
     */
    public static function DROP_EVEN()
    {
        return new InterlaceMode(self::DROP_EVEN);
    }

    /**
     * Drop all odd frames
     *
     * @return InterlaceMode
     */
    public static function DROP_ODD()
    {
        return new InterlaceMode(self::DROP_ODD);
    }

    /**
     * Double the height of all frames by inserting alternating black lines
     *
     * @return InterlaceMode
     */
    public static function PAD()
    {
        return new InterlaceMode(self::PAD);
    }

    /**
     * Double the frame rate. Extra frames use the second field of the next frame, alternating with the first field of the previous frame
     *
     * @return InterlaceMode
     */
    public static function INTERLACE_X2()
    {
        return new InterlaceMode(self::INTERLACE_X2);
    }

    /**
     * Move odd frames into the upper field and even frames into the lower field
     *
     * @return InterlaceMode
     */
    public static function MERGE()
    {
        return new InterlaceMode(self::MERGE);
    }

    /**
     * Double the height of all frames by inserting the lines of the next frame as second field
     *
     * @return InterlaceMode
     */
    public static function MERGE_X2()
    {
        return new InterlaceMode(self::MERGE_X2);
    }
}

