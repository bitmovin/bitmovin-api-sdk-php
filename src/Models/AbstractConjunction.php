<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AbstractConjunction extends AbstractCondition
{
    /** @var \BitmovinApiSdk\Models\AbstractCondition[] */
    public $conditions;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->conditions = ObjectMapper::map($this->conditions, AbstractCondition::class);
    }

    /**
     * Array to perform the AND/OR evaluation on
     *
     * @param \BitmovinApiSdk\Models\AbstractCondition[] $conditions
     * @return $this
     */
    public function conditions(array $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }
}

