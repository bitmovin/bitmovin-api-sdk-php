<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\S3;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\S3Output;

class S3OutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var S3Output[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, S3Output::class);
    }
}
