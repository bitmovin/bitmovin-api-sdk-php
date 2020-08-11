<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\ChunkedText;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DashChunkedTextRepresentation;

class DashChunkedTextRepresentationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DashChunkedTextRepresentation[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DashChunkedTextRepresentation::class);
    }
}
