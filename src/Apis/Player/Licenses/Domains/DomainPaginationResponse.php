<?php

namespace BitmovinApiSdk\Apis\Player\Licenses\Domains;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Domain;

class DomainPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Domain[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Domain::class);
    }
}
