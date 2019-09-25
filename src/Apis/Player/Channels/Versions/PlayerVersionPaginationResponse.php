<?php

namespace BitmovinApiSdk\Apis\Player\Channels\Versions;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PlayerVersion;

class PlayerVersionPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PlayerVersion[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PlayerVersion::class);
    }
}
