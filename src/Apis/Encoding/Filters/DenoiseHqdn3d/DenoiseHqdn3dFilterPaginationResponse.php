<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\DenoiseHqdn3d;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DenoiseHqdn3dFilter;

class DenoiseHqdn3dFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DenoiseHqdn3dFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DenoiseHqdn3dFilter::class);
    }
}
