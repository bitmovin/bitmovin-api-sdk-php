<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Sprite;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SpriteRepresentation;

class SpriteRepresentationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SpriteRepresentation[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SpriteRepresentation::class);
    }
}
