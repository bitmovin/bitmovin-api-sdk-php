<?php

namespace BitmovinApiSdk\Models;

class ScheduledInsertableContentStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CREATED = 'CREATED';

    /** @var string */
    private const SCHEDULED = 'SCHEDULED';

    /** @var string */
    private const TO_BE_DESCHEDULED = 'TO_BE_DESCHEDULED';

    /** @var string */
    private const DESCHEDULED = 'DESCHEDULED';

    /** @var string */
    private const ERROR = 'ERROR';

    /**
     * @param string $value
     * @return ScheduledInsertableContentStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * CREATED
     *
     * @return ScheduledInsertableContentStatus
     */
    public static function CREATED()
    {
        return new ScheduledInsertableContentStatus(self::CREATED);
    }

    /**
     * SCHEDULED
     *
     * @return ScheduledInsertableContentStatus
     */
    public static function SCHEDULED()
    {
        return new ScheduledInsertableContentStatus(self::SCHEDULED);
    }

    /**
     * TO_BE_DESCHEDULED
     *
     * @return ScheduledInsertableContentStatus
     */
    public static function TO_BE_DESCHEDULED()
    {
        return new ScheduledInsertableContentStatus(self::TO_BE_DESCHEDULED);
    }

    /**
     * DESCHEDULED
     *
     * @return ScheduledInsertableContentStatus
     */
    public static function DESCHEDULED()
    {
        return new ScheduledInsertableContentStatus(self::DESCHEDULED);
    }

    /**
     * ERROR
     *
     * @return ScheduledInsertableContentStatus
     */
    public static function ERROR()
    {
        return new ScheduledInsertableContentStatus(self::ERROR);
    }
}

