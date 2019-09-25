<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Keyframes;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Keyframe;

class KeyframePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Keyframe[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Keyframe::class);
    }
}
