<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Primetime;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PrimeTimeDrm;

class PrimeTimeDrmPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PrimeTimeDrm[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PrimeTimeDrm::class);
    }
}
