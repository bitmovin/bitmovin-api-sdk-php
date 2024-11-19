<?php

namespace BitmovinApiSdk\Models;

class LiveStandbyPoolEncodingStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const TO_BE_CREATED = 'TO_BE_CREATED';

    /** @var string */
    private const CREATING = 'CREATING';

    /** @var string */
    private const PREPARING = 'PREPARING';

    /** @var string */
    private const READY = 'READY';

    /** @var string */
    private const TO_BE_DELETED = 'TO_BE_DELETED';

    /** @var string */
    private const DELETING = 'DELETING';

    /** @var string */
    private const ACQUIRED = 'ACQUIRED';

    /** @var string */
    private const ERROR = 'ERROR';

    /**
     * @param string $value
     * @return LiveStandbyPoolEncodingStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The encoding is about to be created
     *
     * @return LiveStandbyPoolEncodingStatus
     */
    public static function TO_BE_CREATED()
    {
        return new LiveStandbyPoolEncodingStatus(self::TO_BE_CREATED);
    }

    /**
     * The encoding is being created
     *
     * @return LiveStandbyPoolEncodingStatus
     */
    public static function CREATING()
    {
        return new LiveStandbyPoolEncodingStatus(self::CREATING);
    }

    /**
     * The encoding is starting and configured and not ready for streaming yet
     *
     * @return LiveStandbyPoolEncodingStatus
     */
    public static function PREPARING()
    {
        return new LiveStandbyPoolEncodingStatus(self::PREPARING);
    }

    /**
     * The encoding is ready to be acquired from the pool
     *
     * @return LiveStandbyPoolEncodingStatus
     */
    public static function READY()
    {
        return new LiveStandbyPoolEncodingStatus(self::READY);
    }

    /**
     * The encoding is about to be deleted
     *
     * @return LiveStandbyPoolEncodingStatus
     */
    public static function TO_BE_DELETED()
    {
        return new LiveStandbyPoolEncodingStatus(self::TO_BE_DELETED);
    }

    /**
     * The encoding is being deleted
     *
     * @return LiveStandbyPoolEncodingStatus
     */
    public static function DELETING()
    {
        return new LiveStandbyPoolEncodingStatus(self::DELETING);
    }

    /**
     * The encoding of the pool is acquired and removed from the pool
     *
     * @return LiveStandbyPoolEncodingStatus
     */
    public static function ACQUIRED()
    {
        return new LiveStandbyPoolEncodingStatus(self::ACQUIRED);
    }

    /**
     * The encoding of the pool is in error state
     *
     * @return LiveStandbyPoolEncodingStatus
     */
    public static function ERROR()
    {
        return new LiveStandbyPoolEncodingStatus(self::ERROR);
    }
}

