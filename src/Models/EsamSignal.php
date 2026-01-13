<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EsamSignal extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $offset;

    /** @var string */
    public $binary;

    /** @var string */
    public $interval;

    /** @var string */
    public $end;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The offset from the matched signal in ISO 8601 duration format, accurate to milliseconds
     *
     * @param string $offset
     * @return $this
     */
    public function offset(string $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Base64-encoded SCTE-35 binary data to be inserted into the stream (required)
     *
     * @param string $binary
     * @return $this
     */
    public function binary(string $binary)
    {
        $this->binary = $binary;

        return $this;
    }

    /**
     * Interval in ISO 8601 duration format for which the signal should be repeated.  A signal may be specified as repeating when the interval and end attributes are present.  In this case, the signal is executed at the time specified by offset and again at the time  specified by adding interval to offset. This should be continued until reaching the duration  of offset + end.
     *
     * @param string $interval
     * @return $this
     */
    public function interval(string $interval)
    {
        $this->interval = $interval;

        return $this;
    }

    /**
     * End duration in ISO 8601 duration format when a repeated signal should stop being repeated
     *
     * @param string $end
     * @return $this
     */
    public function end(string $end)
    {
        $this->end = $end;

        return $this;
    }
}

