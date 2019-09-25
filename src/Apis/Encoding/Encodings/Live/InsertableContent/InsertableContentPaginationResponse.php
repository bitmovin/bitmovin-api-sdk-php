<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\InsertableContent;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\InsertableContent;

class InsertableContentPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var InsertableContent[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, InsertableContent::class);
    }
}
