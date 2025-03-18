<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PlayerLicenseUpdateRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $name;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Name of the License (required)
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }
}

