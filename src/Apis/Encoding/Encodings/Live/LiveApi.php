<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Live\InsertableContent\InsertableContentApi;

class LiveApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var InsertableContentApi */
    public $insertableContent;

    /**
     * LiveApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->insertableContent = new InsertableContentApi(null, $this->httpWrapper);
    }

    /**
     * Live Encoding Details
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\LiveEncoding
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\LiveEncoding
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/live', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveEncoding::class);
    }

    /**
     * Live Encoding Start Details
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\StartLiveEncodingRequest
     * @throws BitmovinApiException
     */
    public function getStartRequest(string $encodingId) : \BitmovinApiSdk\Models\StartLiveEncodingRequest
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/live/start', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StartLiveEncodingRequest::class);
    }

    /**
     * Re-Start Live Encoding
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function restart(string $encodingId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/live/restart', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Start Live Encoding
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\StartLiveEncodingRequest $startLiveEncodingRequest
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function start(string $encodingId, \BitmovinApiSdk\Models\StartLiveEncodingRequest $startLiveEncodingRequest) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/live/start', $pathParams,  null, $startLiveEncodingRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Stop Live Encoding
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
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/live/stop', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }
}
