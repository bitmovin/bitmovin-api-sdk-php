<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\EbuR128SinglePass;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\EbuR128SinglePassFilter;

class EbuR128SinglePassFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var EbuR128SinglePassFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, EbuR128SinglePassFilter::class);
    }
}
