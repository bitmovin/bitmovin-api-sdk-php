<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Gcs;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\GcsOutput;

class GcsOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var GcsOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, GcsOutput::class);
    }
}
