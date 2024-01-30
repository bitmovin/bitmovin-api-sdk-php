<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamKey extends BitmovinResource
{
    /** @var string */
    public $value;

    /** @var StreamKeyStatus */
    public $status;

    /** @var StreamKeyType */
    public $type;

    /** @var string */
    public $assignedEncodingId;

    /** @var string */
    public $assignedIngestPointId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, StreamKeyStatus::class);
        $this->type = ObjectMapper::map($this->type, StreamKeyType::class);
    }

    /**
     * Stream key used for live streaming. This stream key is reserved and can be re-used with different live encodings. If this value is not provided, a unique random stream key will be generated. **Important:** This value has to be globally unique. If it is set manually, be sure to use a secure value. If the stream key value is guessed by others your live encoding can be compromised.
     *
     * @param string $value
     * @return $this
     */
    public function value(string $value)
    {
        $this->value = $value;

        return $this;
    }
}

