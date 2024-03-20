<?php

namespace BitmovinApiSdk\Apis\Streams\Config\DomainRestriction;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\StreamsDomainRestrictionResponse;

class StreamsDomainRestrictionResponsePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var StreamsDomainRestrictionResponse[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, StreamsDomainRestrictionResponse::class);
    }
}
