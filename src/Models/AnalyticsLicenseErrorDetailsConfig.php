<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsLicenseErrorDetailsConfig extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var bool */
    public $enabled;

    /** @var bool */
    public $networkExplorerEnabled;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

