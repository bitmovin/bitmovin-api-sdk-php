<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Scte35Triggers;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Scte35Trigger;

class Scte35TriggerPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Scte35Trigger[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Scte35Trigger::class);
    }
}
