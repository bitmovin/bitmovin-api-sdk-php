<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\ProgressiveWebm;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DashProgressiveWebmRepresentation;

class DashProgressiveWebmRepresentationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DashProgressiveWebmRepresentation[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DashProgressiveWebmRepresentation::class);
    }
}
