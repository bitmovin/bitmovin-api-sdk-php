<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Azure;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AzureInput;

class AzureInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AzureInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AzureInput::class);
    }
}
