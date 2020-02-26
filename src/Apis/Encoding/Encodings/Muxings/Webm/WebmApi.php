<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Webm;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Webm\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Webm\Drm\DrmApi;

class WebmApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var DrmApi */
    public $drm;

    /**
     * WebmApi constructor.
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
     * Add WebM muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\WebmMuxing $webmMuxing
     * @return \BitmovinApiSdk\Models\WebmMuxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\WebmMuxing $webmMuxing) : \BitmovinApiSdk\Models\WebmMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/webm', $pathParams,  null, $webmMuxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WebmMuxing::class);
    }

    /**
     * Delete WebM muxing
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/webm/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * WebM muxing details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\WebmMuxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\WebmMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/webm/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WebmMuxing::class);
    }

    /**
     * List WebM muxings
     *
     * @param string $encodingId
     * @param WebmMuxingListQueryParams|null $queryParams
     * @return WebmMuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, WebmMuxingListQueryParams $queryParams = null) : WebmMuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/webm', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, WebmMuxingPaginationResponse::class);
    }
}
