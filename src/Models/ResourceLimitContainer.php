<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ResourceLimitContainer extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\ResourceType */
    public $resource;

    /** @var \BitmovinApiSdk\Models\ResourceLimit[] */
    public $limits;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->resource = ObjectMapper::map($this->resource, ResourceType::class);
        $this->limits = ObjectMapper::map($this->limits, ResourceLimit::class);
    }

    /**
     * resource
     *
     * @param \BitmovinApiSdk\Models\ResourceType $resource
     * @return $this
     */
    public function resource(\BitmovinApiSdk\Models\ResourceType $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * limits
     *
     * @param \BitmovinApiSdk\Models\ResourceLimit[] $limits
     * @return $this
     */
    public function limits(array $limits)
    {
        $this->limits = $limits;

        return $this;
    }
}

