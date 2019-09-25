<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\MachineLearning\ObjectDetection\Results\ResultsApi;

class ObjectDetectionApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var ResultsApi */
    public $results;

    /**
     * ObjectDetectionApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->results = new ResultsApi(null, $this->httpWrapper);
    }

    /**
     * Add object detection configuration to an encoding
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\ObjectDetectionConfiguration $objectDetectionConfiguration
     * @return \BitmovinApiSdk\Models\ObjectDetectionConfiguration
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\ObjectDetectionConfiguration $objectDetectionConfiguration) : \BitmovinApiSdk\Models\ObjectDetectionConfiguration
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/machine-learning/object-detection', $pathParams,  null, $objectDetectionConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ObjectDetectionConfiguration::class);
    }

    /**
     * Delete object detection configuration
     *
     * @param string $encodingId
     * @param string $objectDetectionId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $objectDetectionId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'object_detection_id' => $objectDetectionId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/machine-learning/object-detection/{object_detection_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get object detection configuration details
     *
     * @param string $encodingId
     * @param string $objectDetectionId
     * @return \BitmovinApiSdk\Models\ObjectDetectionConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $objectDetectionId) : \BitmovinApiSdk\Models\ObjectDetectionConfiguration
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'object_detection_id' => $objectDetectionId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/machine-learning/object-detection/{object_detection_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ObjectDetectionConfiguration::class);
    }

    /**
     * List object detection configurations of an encoding
     *
     * @param string $encodingId
     * @param ObjectDetectionConfigurationListQueryParams|null $queryParams
     * @return ObjectDetectionConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, ObjectDetectionConfigurationListQueryParams $queryParams = null) : ObjectDetectionConfigurationPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/machine-learning/object-detection', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ObjectDetectionConfigurationPaginationResponse::class);
    }
}
