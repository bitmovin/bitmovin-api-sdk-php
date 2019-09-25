<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Groups\Permissions;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Acl;

class AclPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Acl[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Acl::class);
    }
}
