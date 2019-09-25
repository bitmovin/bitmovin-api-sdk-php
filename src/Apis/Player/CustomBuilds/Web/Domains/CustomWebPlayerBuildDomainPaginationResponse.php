<?php

namespace BitmovinApiSdk\Apis\Player\CustomBuilds\Web\Domains;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\CustomWebPlayerBuildDomain;

class CustomWebPlayerBuildDomainPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var CustomWebPlayerBuildDomain[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, CustomWebPlayerBuildDomain::class);
    }
}
