<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Tenant extends BitmovinResource
{
    /** @var string */
    public $eMail;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Email address of the tenant. (required)
     *
     * @param string $eMail
     * @return $this
     */
    public function eMail(string $eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }
}

