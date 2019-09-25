<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Input;

class InputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Input[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Input::class);
    }
}
