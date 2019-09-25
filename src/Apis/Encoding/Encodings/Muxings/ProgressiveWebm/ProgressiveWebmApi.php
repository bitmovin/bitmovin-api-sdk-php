<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveWebm;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveWebm\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveWebm\Information\InformationApi;

class ProgressiveWebmApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var InformationApi */
    public $information;

    /**
     * ProgressiveWebmApi constructor.
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
     * Add Progressive WebM Muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\ProgressiveWebmMuxing $progressiveWebmMuxing
     * @return \BitmovinApiSdk\Models\ProgressiveWebmMuxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\ProgressiveWebmMuxing $progressiveWebmMuxing) : \BitmovinApiSdk\Models\ProgressiveWebmMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/progressive-webm', $pathParams,  null, $progressiveWebmMuxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ProgressiveWebmMuxing::class);
    }

    /**
     * Delete Progressive WebM Muxing
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/progressive-webm/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Progressive WebM Muxing Details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\ProgressiveWebmMuxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\ProgressiveWebmMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/progressive-webm/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ProgressiveWebmMuxing::class);
    }

    /**
     * List Progressive WebM Muxings
     *
     * @param string $encodingId
     * @param ProgressiveWebmMuxingListQueryParams|null $queryParams
     * @return ProgressiveWebmMuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, ProgressiveWebmMuxingListQueryParams $queryParams = null) : ProgressiveWebmMuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/progressive-webm', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ProgressiveWebmMuxingPaginationResponse::class);
    }
}
