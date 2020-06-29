<?php

namespace BitmovinApiSdk\Models;

class AvailabilityStartTimeMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ON_FIRST_SEGMENT = 'ON_FIRST_SEGMENT';

    /** @var string */
    private const ON_STREAM_INGEST = 'ON_STREAM_INGEST';

    /**
     * @param string $value
     * @return AvailabilityStartTimeMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The availabilityStartTime will be set to the time, the first segment is available
     *
     * @return AvailabilityStartTimeMode
     */
    public static function ON_FIRST_SEGMENT()
    {
        return new AvailabilityStartTimeMode(self::ON_FIRST_SEGMENT);
    }

    /**
     * The availabilityStartTime will be set to the time, the encoder starts encoding and the stream is ingesting
     *
     * @return AvailabilityStartTimeMode
     */
    public static function ON_STREAM_INGEST()
    {
        return new AvailabilityStartTimeMode(self::ON_STREAM_INGEST);
    }
}

