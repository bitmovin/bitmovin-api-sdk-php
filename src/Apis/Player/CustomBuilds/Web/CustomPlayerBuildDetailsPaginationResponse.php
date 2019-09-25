<?php

namespace BitmovinApiSdk\Apis\Player\CustomBuilds\Web;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\CustomPlayerBuildDetails;

class CustomPlayerBuildDetailsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var CustomPlayerBuildDetails[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, CustomPlayerBuildDetails::class);
    }
}
