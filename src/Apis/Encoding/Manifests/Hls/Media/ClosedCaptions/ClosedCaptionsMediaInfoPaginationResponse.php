<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\ClosedCaptions;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ClosedCaptionsMediaInfo;

class ClosedCaptionsMediaInfoPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ClosedCaptionsMediaInfo[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ClosedCaptionsMediaInfo::class);
    }
}
