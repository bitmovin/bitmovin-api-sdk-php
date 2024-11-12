<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Akamai;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AkamaiAccount;

class AkamaiAccountPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AkamaiAccount[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AkamaiAccount::class);
    }
}
