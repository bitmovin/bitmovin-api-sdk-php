<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\DirectFileUpload;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DirectFileUploadInput;

class DirectFileUploadInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DirectFileUploadInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DirectFileUploadInput::class);
    }
}
