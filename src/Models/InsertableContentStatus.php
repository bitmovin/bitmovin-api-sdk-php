<?php

namespace BitmovinApiSdk\Models;

class InsertableContentStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CREATED = 'CREATED';

    /** @var string */
    private const DOWNLOADING = 'DOWNLOADING';

    /** @var string */
    private const READY = 'READY';

    /** @var string */
    private const ERROR = 'ERROR';

    /**
     * @param string $value
     * @return InsertableContentStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * CREATED
     *
     * @return InsertableContentStatus
     */
    public static function CREATED()
    {
        return new InsertableContentStatus(self::CREATED);
    }

    /**
     * DOWNLOADING
     *
     * @return InsertableContentStatus
     */
    public static function DOWNLOADING()
    {
        return new InsertableContentStatus(self::DOWNLOADING);
    }

    /**
     * READY
     *
     * @return InsertableContentStatus
     */
    public static function READY()
    {
        return new InsertableContentStatus(self::READY);
    }

    /**
     * ERROR
     *
     * @return InsertableContentStatus
     */
    public static function ERROR()
    {
        return new InsertableContentStatus(self::ERROR);
    }
}

