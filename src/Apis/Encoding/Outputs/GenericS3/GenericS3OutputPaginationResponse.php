<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\GenericS3;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\GenericS3Output;

class GenericS3OutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var GenericS3Output[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, GenericS3Output::class);
    }
}
