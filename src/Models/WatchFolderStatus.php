<?php

namespace BitmovinApiSdk\Models;

class WatchFolderStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const STOPPED = 'STOPPED';

    /** @var string */
    private const STARTED = 'STARTED';

    /** @var string */
    private const ERROR = 'ERROR';

    /**
     * @param string $value
     * @return WatchFolderStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The watch folder is currently inactive
     *
     * @return WatchFolderStatus
     */
    public static function STOPPED()
    {
        return new WatchFolderStatus(self::STOPPED);
    }

    /**
     * The watch folder is currently active and monitors the storage for new files to be encoded
     *
     * @return WatchFolderStatus
     */
    public static function STARTED()
    {
        return new WatchFolderStatus(self::STARTED);
    }

    /**
     * The watch folder is inactive due to an error
     *
     * @return WatchFolderStatus
     */
    public static function ERROR()
    {
        return new WatchFolderStatus(self::ERROR);
    }
}

