<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Vtt;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\VttMediaInfo;

class VttMediaInfoPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var VttMediaInfo[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, VttMediaInfo::class);
    }
}
