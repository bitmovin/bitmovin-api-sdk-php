<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Streams\Iframe;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\IFramePlaylist;

class IFramePlaylistPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var IFramePlaylist[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, IFramePlaylist::class);
    }
}
