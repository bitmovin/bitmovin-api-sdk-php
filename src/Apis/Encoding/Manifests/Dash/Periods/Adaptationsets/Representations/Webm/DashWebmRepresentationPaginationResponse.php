<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Webm;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DashWebmRepresentation;

class DashWebmRepresentationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DashWebmRepresentation[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DashWebmRepresentation::class);
    }
}
