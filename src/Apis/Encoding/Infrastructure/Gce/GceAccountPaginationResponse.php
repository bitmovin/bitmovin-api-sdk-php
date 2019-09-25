<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Gce;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\GceAccount;

class GceAccountPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var GceAccount[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, GceAccount::class);
    }
}
