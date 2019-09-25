<?php

namespace BitmovinApiSdk\Apis\Player\Licenses;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PlayerLicense;

class PlayerLicensePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PlayerLicense[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PlayerLicense::class);
    }
}
