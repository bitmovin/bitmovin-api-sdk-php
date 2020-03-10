<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection\Results\ByTimestamp;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ByTimestampApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ByTimestampApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List object detection results grouped by timestamp
     *
     * @param string $encodingId
     * @param string $objectDetectionId
     * @param ObjectDetectionTimestampResultListQueryParams|null $queryParams
     * @return ObjectDetectionTimestampResultPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $objectDetectionId, ObjectDetectionTimestampResultListQueryParams $queryParams = null) : ObjectDetectionTimestampResultPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'object_detection_id' => $objectDetectionId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/machine-learning/object-detection/{object_detection_id}/results/by-timestamp', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ObjectDetectionTimestampResultPaginationResponse::class);
    }
}
