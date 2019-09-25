<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ManifestTypeResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var ManifestType */
    public $type;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->type = ObjectMapper::map($this->type, ManifestType::class);
    }

    /**
     * The type of the manifest
     *
     * @param ManifestType $type
     * @return $this
     */
    public function type(ManifestType $type)
    {
        $this->type = $type;

        return $this;
    }
}

