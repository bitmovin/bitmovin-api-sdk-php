<?php

namespace BitmovinApiSdk\Apis\Player\Channels;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PlayerChannel;

class PlayerChannelPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PlayerChannel[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PlayerChannel::class);
    }
}
