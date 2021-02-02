<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Watermarking\NexguardFileMarker;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\NexGuardFileMarker;

class NexGuardFileMarkerPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var NexGuardFileMarker[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, NexGuardFileMarker::class);
    }
}
