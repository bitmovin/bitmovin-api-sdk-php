<?php

namespace BitmovinApiSdk\Apis\Account\Limits;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ResourceLimitContainer;

class ResourceLimitContainerPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ResourceLimitContainer[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ResourceLimitContainer::class);
    }
}
