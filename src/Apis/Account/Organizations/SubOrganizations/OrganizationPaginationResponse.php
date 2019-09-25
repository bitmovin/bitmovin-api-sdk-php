<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\SubOrganizations;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Organization;

class OrganizationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Organization[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Organization::class);
    }
}
