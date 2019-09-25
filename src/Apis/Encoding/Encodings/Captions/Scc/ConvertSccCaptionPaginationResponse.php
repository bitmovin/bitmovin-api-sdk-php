<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Captions\Scc;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ConvertSccCaption;

class ConvertSccCaptionPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ConvertSccCaption[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ConvertSccCaption::class);
    }
}
