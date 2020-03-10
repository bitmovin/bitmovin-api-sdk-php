<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection\Results;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection\Results\ByTimestamp\ByTimestampApi;

class ResultsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ByTimestampApi */
    public $byTimestamp;

    /**
     * ResultsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->byTimestamp = new ByTimestampApi(null, $this->httpWrapper);
    }

    /**
     * List object detection results
     *
     * @param string $encodingId
     * @param string $objectDetectionId
     * @param ObjectDetectionResultListQueryParams|null $queryParams
     * @return ObjectDetectionResultPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $objectDetectionId, ObjectDetectionResultListQueryParams $queryParams = null) : ObjectDetectionResultPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'object_detection_id' => $objectDetectionId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/machine-learning/object-detection/{object_detection_id}/results', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ObjectDetectionResultPaginationResponse::class);
    }
}
