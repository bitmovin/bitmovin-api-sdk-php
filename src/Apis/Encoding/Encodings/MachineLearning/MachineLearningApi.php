<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection\ObjectDetectionApi;

class MachineLearningApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ObjectDetectionApi */
    public $objectDetection;

    /**
     * MachineLearningApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->objectDetection = new ObjectDetectionApi(null, $this->httpWrapper);
    }
}
