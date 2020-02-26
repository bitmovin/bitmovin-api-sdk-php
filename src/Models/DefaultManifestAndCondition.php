<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DefaultManifestAndCondition extends DefaultManifestCondition
{
    /** @var \BitmovinApiSdk\Models\DefaultManifestCondition[] */
    public $conditions;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->conditions = ObjectMapper::map($this->conditions, DefaultManifestCondition::class);
    }

    /**
     * Array to perform the AND evaluation on. This conditions evaluates to true if all sub conditions evaluate to true.
     *
     * @param \BitmovinApiSdk\Models\DefaultManifestCondition[] $conditions
     * @return $this
     */
    public function conditions(array $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }
}

