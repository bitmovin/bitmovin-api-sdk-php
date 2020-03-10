<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Ts;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Ts\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Ts\Drm\DrmApi;

class TsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var DrmApi */
    public $drm;

    /**
     * TsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->drm = new DrmApi(null, $this->httpWrapper);
    }

    /**
     * Add TS muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\TsMuxing $tsMuxing
     * @return \BitmovinApiSdk\Models\TsMuxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\TsMuxing $tsMuxing) : \BitmovinApiSdk\Models\TsMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/muxings/ts', $pathParams,  null, $tsMuxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TsMuxing::class);
    }

    /**
     * Delete TS muxing
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/muxings/ts/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * TS muxing details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\TsMuxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\TsMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/ts/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TsMuxing::class);
    }

    /**
     * List TS muxings
     *
     * @param string $encodingId
     * @param TsMuxingListQueryParams|null $queryParams
     * @return TsMuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, TsMuxingListQueryParams $queryParams = null) : TsMuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/ts', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, TsMuxingPaginationResponse::class);
    }
}
