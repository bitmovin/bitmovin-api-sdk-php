<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ManifestResource extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $manifestId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Id of the manifest resource (required)
     *
     * @param string $manifestId
     * @return $this
     */
    public function manifestId(string $manifestId)
    {
        $this->manifestId = $manifestId;

        return $this;
    }
}

