<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Oci;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\OciAccount;

class OciAccountPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var OciAccount[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, OciAccount::class);
    }
}
