<?php

namespace BitmovinApiSdk\Apis\Encoding\Templates;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\EncodingTemplateResponse;

class EncodingTemplateResponsePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var EncodingTemplateResponse[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, EncodingTemplateResponse::class);
    }
}
