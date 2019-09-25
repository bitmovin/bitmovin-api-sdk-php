<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Video;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\VideoMediaInfo;

class VideoMediaInfoPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var VideoMediaInfo[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, VideoMediaInfo::class);
    }
}
