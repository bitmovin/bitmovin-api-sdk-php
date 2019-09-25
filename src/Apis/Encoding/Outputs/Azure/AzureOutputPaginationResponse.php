<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Azure;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AzureOutput;

class AzureOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AzureOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AzureOutput::class);
    }
}
