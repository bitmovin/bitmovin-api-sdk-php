<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Smooth\Contentprotection;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SmoothManifestContentProtection;

class SmoothManifestContentProtectionPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SmoothManifestContentProtection[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SmoothManifestContentProtection::class);
    }
}
