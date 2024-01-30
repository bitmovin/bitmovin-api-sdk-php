<?php

namespace BitmovinApiSdk\Models;

class StreamKeyStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ASSIGNED = 'ASSIGNED';

    /** @var string */
    private const UNASSIGNED = 'UNASSIGNED';

    /**
     * @param string $value
     * @return StreamKeyStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Stream key is assigned to a live encoding.  This means, it **can not be assigned** to a RedundantRtmpInput at the moment. It will be set to UNASSIGNED if the live encoding is finished or in error state
     *
     * @return StreamKeyStatus
     */
    public static function ASSIGNED()
    {
        return new StreamKeyStatus(self::ASSIGNED);
    }

    /**
     * Stream key is not assigned to a live encoding.  This means, that it **is available** to be used with a RedundantRtmpInput
     *
     * @return StreamKeyStatus
     */
    public static function UNASSIGNED()
    {
        return new StreamKeyStatus(self::UNASSIGNED);
    }
}

