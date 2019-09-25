<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Smooth;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SmoothStreamingManifest;

class SmoothStreamingManifestPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SmoothStreamingManifest[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SmoothStreamingManifest::class);
    }
}
