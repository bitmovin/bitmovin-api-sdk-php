<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Bifs;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Bif;

class BifPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Bif[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Bif::class);
    }
}
