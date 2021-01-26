<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PackedAudioMuxingInformation extends FragmentedMuxingInformation
{
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

