<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AdaptationSet;

class AdaptationSetPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AdaptationSet[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AdaptationSet::class);
    }
}
