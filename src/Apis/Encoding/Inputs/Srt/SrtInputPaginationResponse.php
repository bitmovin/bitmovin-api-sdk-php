<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Srt;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SrtInput;

class SrtInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SrtInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SrtInput::class);
    }
}
