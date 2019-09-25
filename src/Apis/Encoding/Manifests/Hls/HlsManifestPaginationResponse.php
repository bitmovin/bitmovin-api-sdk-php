<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\HlsManifest;

class HlsManifestPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var HlsManifest[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, HlsManifest::class);
    }
}
