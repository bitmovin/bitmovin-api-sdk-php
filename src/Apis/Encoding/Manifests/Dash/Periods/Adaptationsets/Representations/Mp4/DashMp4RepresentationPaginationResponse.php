<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Mp4;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DashMp4Representation;

class DashMp4RepresentationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DashMp4Representation[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DashMp4Representation::class);
    }
}
