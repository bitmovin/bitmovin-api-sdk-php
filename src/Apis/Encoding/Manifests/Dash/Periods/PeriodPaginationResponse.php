<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Period;

class PeriodPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Period[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Period::class);
    }
}
