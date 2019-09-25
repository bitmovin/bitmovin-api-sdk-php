<?php

namespace BitmovinApiSdk\Apis\Encoding\ErrorDefinitions;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\EncodingErrorDefinition;

class EncodingErrorDefinitionPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var EncodingErrorDefinition[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, EncodingErrorDefinition::class);
    }
}
