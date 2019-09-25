<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\Representations\Mp4;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SmoothStreamingRepresentation;

class SmoothStreamingRepresentationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SmoothStreamingRepresentation[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SmoothStreamingRepresentation::class);
    }
}
