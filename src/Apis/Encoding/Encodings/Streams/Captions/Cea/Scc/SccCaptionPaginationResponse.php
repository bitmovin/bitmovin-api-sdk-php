<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea\Scc;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SccCaption;

class SccCaptionPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SccCaption[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SccCaption::class);
    }
}
