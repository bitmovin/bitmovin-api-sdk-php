<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Playready;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PlayReadyDrm;

class PlayReadyDrmPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PlayReadyDrm[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PlayReadyDrm::class);
    }
}
