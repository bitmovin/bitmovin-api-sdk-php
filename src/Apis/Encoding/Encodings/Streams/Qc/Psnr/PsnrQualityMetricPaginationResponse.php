<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Qc\Psnr;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PsnrQualityMetric;

class PsnrQualityMetricPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PsnrQualityMetric[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PsnrQualityMetric::class);
    }
}
