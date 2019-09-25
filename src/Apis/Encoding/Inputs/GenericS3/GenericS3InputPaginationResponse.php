<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\GenericS3;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\GenericS3Input;

class GenericS3InputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var GenericS3Input[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, GenericS3Input::class);
    }
}
