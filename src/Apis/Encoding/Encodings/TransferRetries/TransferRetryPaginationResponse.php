<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\TransferRetries;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\TransferRetry;

class TransferRetryPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var TransferRetry[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, TransferRetry::class);
    }
}
