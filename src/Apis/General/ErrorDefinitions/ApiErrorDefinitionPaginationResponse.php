<?php

namespace BitmovinApiSdk\Apis\General\ErrorDefinitions;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ApiErrorDefinition;

class ApiErrorDefinitionPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ApiErrorDefinition[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ApiErrorDefinition::class);
    }
}
