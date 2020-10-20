<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Azure;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AzureAccount;

class AzureAccountPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AzureAccount[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AzureAccount::class);
    }
}
