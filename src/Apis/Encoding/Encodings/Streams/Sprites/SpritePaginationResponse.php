<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Sprites;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Sprite;

class SpritePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Sprite[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Sprite::class);
    }
}
