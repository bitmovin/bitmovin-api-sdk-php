<?php

namespace BitmovinApiSdk\Models;

class Status extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CREATED = 'CREATED';

    /** @var string */
    private const QUEUED = 'QUEUED';

    /** @var string */
    private const RUNNING = 'RUNNING';

    /** @var string */
    private const FINISHED = 'FINISHED';

    /** @var string */
    private const ERROR = 'ERROR';

    /** @var string */
    private const CANCELED = 'CANCELED';

    /**
     * @param string $value
     * @return Status
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The process has been created, but not started yet
     *
     * @return Status
     */
    public static function CREATED()
    {
        return new Status(self::CREATED);
    }

    /**
     * The process has been enqueued for execution and will start as soon as resources are available
     *
     * @return Status
     */
    public static function QUEUED()
    {
        return new Status(self::QUEUED);
    }

    /**
     * The process is being executed
     *
     * @return Status
     */
    public static function RUNNING()
    {
        return new Status(self::RUNNING);
    }

    /**
     * The process was finished successfully. This is a final state
     *
     * @return Status
     */
    public static function FINISHED()
    {
        return new Status(self::FINISHED);
    }

    /**
     * The process has stopped due to an error. This is a final state
     *
     * @return Status
     */
    public static function ERROR()
    {
        return new Status(self::ERROR);
    }

    /**
     * The process has been canceled by the user. This is a final state
     *
     * @return Status
     */
    public static function CANCELED()
    {
        return new Status(self::CANCELED);
    }
}

