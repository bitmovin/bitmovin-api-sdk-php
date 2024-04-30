<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamKeysUnassignAction extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $encodingId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Encoding ID for which stream keys should be unassigned
     *
     * @param string $encodingId
     * @return $this
     */
    public function encodingId(string $encodingId)
    {
        $this->encodingId = $encodingId;

        return $this;
    }
}

