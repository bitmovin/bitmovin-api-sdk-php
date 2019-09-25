<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ObjectDetectionConfiguration;

class ObjectDetectionConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ObjectDetectionConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ObjectDetectionConfiguration::class);
    }
}
