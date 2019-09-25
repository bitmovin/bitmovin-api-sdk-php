<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Audio;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AudioMediaInfo;

class AudioMediaInfoPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AudioMediaInfo[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AudioMediaInfo::class);
    }
}
