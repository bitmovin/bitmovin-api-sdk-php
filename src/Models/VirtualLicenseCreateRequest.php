<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class VirtualLicenseCreateRequest extends VirtualLicense
{
    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

