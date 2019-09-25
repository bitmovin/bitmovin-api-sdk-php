<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Fmp4;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DashFmp4Representation;

class DashFmp4RepresentationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DashFmp4Representation[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DashFmp4Representation::class);
    }
}
