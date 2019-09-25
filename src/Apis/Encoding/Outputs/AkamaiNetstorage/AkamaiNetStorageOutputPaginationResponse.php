<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\AkamaiNetstorage;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AkamaiNetStorageOutput;

class AkamaiNetStorageOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AkamaiNetStorageOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AkamaiNetStorageOutput::class);
    }
}
