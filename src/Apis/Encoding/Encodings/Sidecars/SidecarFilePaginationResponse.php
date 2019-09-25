<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Sidecars;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SidecarFile;

class SidecarFilePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SidecarFile[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SidecarFile::class);
    }
}
