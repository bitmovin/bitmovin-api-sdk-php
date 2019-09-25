<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection\Results;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ObjectDetectionResult;

class ObjectDetectionResultPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ObjectDetectionResult[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ObjectDetectionResult::class);
    }
}
