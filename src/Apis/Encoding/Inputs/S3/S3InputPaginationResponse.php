<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\S3;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\S3Input;

class S3InputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var S3Input[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, S3Input::class);
    }
}
