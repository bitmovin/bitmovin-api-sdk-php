<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\AkamaiNetstorage;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AkamaiNetStorageInput;

class AkamaiNetStorageInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AkamaiNetStorageInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AkamaiNetStorageInput::class);
    }
}
