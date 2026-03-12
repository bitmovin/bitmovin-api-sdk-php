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
}

