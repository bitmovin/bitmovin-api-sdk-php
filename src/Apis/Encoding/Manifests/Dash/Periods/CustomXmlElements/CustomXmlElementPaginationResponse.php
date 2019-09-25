<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\CustomXmlElements;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\CustomXmlElement;

class CustomXmlElementPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var CustomXmlElement[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, CustomXmlElement::class);
    }
}
