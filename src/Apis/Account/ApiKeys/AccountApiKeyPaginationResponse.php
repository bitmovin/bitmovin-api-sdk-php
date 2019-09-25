<?php

namespace BitmovinApiSdk\Apis\Account\ApiKeys;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AccountApiKey;

class AccountApiKeyPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AccountApiKey[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AccountApiKey::class);
    }
}
