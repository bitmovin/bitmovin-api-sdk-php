<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Gcs;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\GcsInput;

class GcsInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var GcsInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, GcsInput::class);
    }
}
