<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PassthroughAudioConfiguration extends CodecConfiguration
{
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

