<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\BroadcastTs;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\BroadcastTs\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\BroadcastTs\Information\InformationApi;

class BroadcastTsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var InformationApi */
    public $information;

    /**
     * BroadcastTsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->information = new InformationApi(null, $this->httpWrapper);
    }

    /**
     * Add Broadcast TS muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\BroadcastTsMuxing $broadcastTsMuxing
     * @return \BitmovinApiSdk\Models\BroadcastTsMuxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\BroadcastTsMuxing $broadcastTsMuxing) : \BitmovinApiSdk\Models\BroadcastTsMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/muxings/broadcast-ts', $pathParams,  null, $broadcastTsMuxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BroadcastTsMuxing::class);
    }

    /**
     * Delete Broadcast TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/muxings/broadcast-ts/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Broadcast TS muxing details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\BroadcastTsMuxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\BroadcastTsMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/broadcast-ts/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BroadcastTsMuxing::class);
    }

    /**
     * List Broadcast TS muxings
     *
     * @param string $encodingId
     * @param BroadcastTsMuxingListQueryParams|null $queryParams
     * @return BroadcastTsMuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, BroadcastTsMuxingListQueryParams $queryParams = null) : BroadcastTsMuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/broadcast-ts', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, BroadcastTsMuxingPaginationResponse::class);
    }
}
