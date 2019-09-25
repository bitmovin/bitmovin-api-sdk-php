<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Groups\Tenants;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Tenant;

class TenantPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Tenant[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Tenant::class);
    }
}
