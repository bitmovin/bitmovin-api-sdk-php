<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Tenants;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\TenantWithGroups;

class TenantWithGroupsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var TenantWithGroups[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, TenantWithGroups::class);
    }
}
