<?php

namespace BitmovinApiSdk\Apis\Encoding\WatchFolders;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\WatchFolder;

class WatchFolderPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var WatchFolder[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, WatchFolder::class);
    }
}
