<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Aws;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AwsAccount;

class AwsAccountPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AwsAccount[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AwsAccount::class);
    }
}
