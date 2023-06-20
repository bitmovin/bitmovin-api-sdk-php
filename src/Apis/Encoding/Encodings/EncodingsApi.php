<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Live\LiveApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\StreamsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\InputStreamsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\MuxingsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\TransferRetries\TransferRetriesApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\OutputPaths\OutputPathsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Captions\CaptionsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Sidecars\SidecarsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Keyframes\KeyframesApi;

class EncodingsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var LiveApi */
    public $live;

    /** @var CustomdataApi */
    public $customdata;

    /** @var StreamsApi */
    public $streams;

    /** @var InputStreamsApi */
    public $inputStreams;

    /** @var MuxingsApi */
    public $muxings;

    /** @var TransferRetriesApi */
    public $transferRetries;

    /** @var OutputPathsApi */
    public $outputPaths;

    /** @var CaptionsApi */
    public $captions;

    /** @var SidecarsApi */
    public $sidecars;

    /** @var KeyframesApi */
    public $keyframes;

    /**
     * EncodingsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->live = new LiveApi(null, $this->httpWrapper);
        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->streams = new StreamsApi(null, $this->httpWrapper);
        $this->inputStreams = new InputStreamsApi(null, $this->httpWrapper);
        $this->muxings = new MuxingsApi(null, $this->httpWrapper);
        $this->transferRetries = new TransferRetriesApi(null, $this->httpWrapper);
        $this->outputPaths = new OutputPathsApi(null, $this->httpWrapper);
        $this->captions = new CaptionsApi(null, $this->httpWrapper);
        $this->sidecars = new SidecarsApi(null, $this->httpWrapper);
        $this->keyframes = new KeyframesApi(null, $this->httpWrapper);
    }

    /**
     * Create Encoding
     *
     * @param \BitmovinApiSdk\Models\Encoding $encoding
     * @return \BitmovinApiSdk\Models\Encoding
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Encoding $encoding) : \BitmovinApiSdk\Models\Encoding
    {
        $response = $this->httpWrapper->request('POST', '/encoding/encodings', [],  null, $encoding, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Encoding::class);
    }

    /**
     * Delete Encoding
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Encoding Details
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\Encoding
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\Encoding
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Encoding::class);
    }

    /**
     * Encoding Start Details
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\StartEncodingRequest
     * @throws BitmovinApiException
     */
    public function getStartRequest(string $encodingId) : \BitmovinApiSdk\Models\StartEncodingRequest
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/start', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StartEncodingRequest::class);
    }

    /**
     * List all Encodings
     *
     * @param EncodingListQueryParams|null $queryParams
     * @return EncodingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(EncodingListQueryParams $queryParams = null) : EncodingPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/encodings', [], $queryParams, null, true);

        return ObjectMapper::map($response, EncodingPaginationResponse::class);
    }

    /**
     * Reprioritize Encoding
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\ReprioritizeEncodingRequest $reprioritizeEncodingRequest
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function reprioritize(string $encodingId, \BitmovinApiSdk\Models\ReprioritizeEncodingRequest $reprioritizeEncodingRequest) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/reprioritize', $pathParams,  null, $reprioritizeEncodingRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Reschedule Encoding
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\RescheduleEncodingRequest $rescheduleEncodingRequest
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function reschedule(string $encodingId, \BitmovinApiSdk\Models\RescheduleEncodingRequest $rescheduleEncodingRequest) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/reschedule', $pathParams,  null, $rescheduleEncodingRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Start VoD Encoding
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\StartEncodingRequest $startEncodingRequest
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function start(string $encodingId, \BitmovinApiSdk\Models\StartEncodingRequest $startEncodingRequest = null) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/start', $pathParams,  null, $startEncodingRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Encoding Status
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\Task
     * @throws BitmovinApiException
     */
    public function status(string $encodingId) : \BitmovinApiSdk\Models\Task
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/status', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Task::class);
    }

    /**
     * Stop Encoding
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function stop(string $encodingId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/stop', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }
}
