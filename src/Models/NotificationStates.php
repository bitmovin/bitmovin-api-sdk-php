<?php

namespace BitmovinApiSdk\Models;

class NotificationStates extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const FIRED = 'FIRED';

    /** @var string */
    private const RESOLVED = 'RESOLVED';

    /**
     * @param string $value
     * @return NotificationStates
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The Notification is fired
     *
     * @return NotificationStates
     */
    public static function FIRED()
    {
        return new NotificationStates(self::FIRED);
    }

    /**
     * The Notification is resolved
     *
     * @return NotificationStates
     */
    public static function RESOLVED()
    {
        return new NotificationStates(self::RESOLVED);
    }
}

