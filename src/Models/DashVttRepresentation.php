<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashVttRepresentation extends DashRepresentation
{
    /** @var string */
    public $vttUrl;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * URL of the referenced VTT file (required)
     *
     * @param string $vttUrl
     * @return $this
     */
    public function vttUrl(string $vttUrl)
    {
        $this->vttUrl = $vttUrl;

        return $this;
    }
}

