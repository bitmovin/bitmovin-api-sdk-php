<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamKeyConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\StreamKeyConfigurationType */
    public $type;

    /** @var string */
    public $streamKeyId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, StreamKeyConfigurationType::class);
    }

    /**
     * type
     *
     * @param \BitmovinApiSdk\Models\StreamKeyConfigurationType $type
     * @return $this
     */
    public function type(\BitmovinApiSdk\Models\StreamKeyConfigurationType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Id of the previously generated stream key.  Only needed when the type is &#x60;ASSIGN&#x60;.
     *
     * @param string $streamKeyId
     * @return $this
     */
    public function streamKeyId(string $streamKeyId)
    {
        $this->streamKeyId = $streamKeyId;

        return $this;
    }
}

