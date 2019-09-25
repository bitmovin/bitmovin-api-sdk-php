<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Subtitles;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SubtitlesMediaInfo;

class SubtitlesMediaInfoPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SubtitlesMediaInfo[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SubtitlesMediaInfo::class);
    }
}
