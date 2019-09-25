<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection\Results\ByTimestamp;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ObjectDetectionTimestampResult;

class ObjectDetectionTimestampResultPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ObjectDetectionTimestampResult[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ObjectDetectionTimestampResult::class);
    }
}
