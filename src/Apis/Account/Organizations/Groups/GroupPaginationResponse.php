<?php

namespace BitmovinApiSdk\Apis\Account\Organizations\Groups;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Group;

class GroupPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Group[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Group::class);
    }
}
