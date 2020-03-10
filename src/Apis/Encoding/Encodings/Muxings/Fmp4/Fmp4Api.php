<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\DrmApi;

class Fmp4Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var DrmApi */
    public $drm;

    /**
     * Fmp4Api constructor.
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
     * Add fMP4 muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\Fmp4Muxing $fmp4Muxing
     * @return \BitmovinApiSdk\Models\Fmp4Muxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\Fmp4Muxing $fmp4Muxing) : \BitmovinApiSdk\Models\Fmp4Muxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/muxings/fmp4', $pathParams,  null, $fmp4Muxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Fmp4Muxing::class);
    }

    /**
     * Delete fMP4 muxing
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/muxings/fmp4/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * fMP4 muxing details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\Fmp4Muxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\Fmp4Muxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/fmp4/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Fmp4Muxing::class);
    }

    /**
     * List fMP4 muxings
     *
     * @param string $encodingId
     * @param Fmp4MuxingListQueryParams|null $queryParams
     * @return Fmp4MuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, Fmp4MuxingListQueryParams $queryParams = null) : Fmp4MuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/fmp4', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, Fmp4MuxingPaginationResponse::class);
    }
}
