<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\Encodings\DnsMappings;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DnsMappingResponse;

class DnsMappingResponsePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DnsMappingResponse[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DnsMappingResponse::class);
    }
}
