<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveMov;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveMov\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveMov\Information\InformationApi;

class ProgressiveMovApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var InformationApi */
    public $information;

    /**
     * ProgressiveMovApi constructor.
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
     * Add Progressive MOV Muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\ProgressiveMovMuxing $progressiveMovMuxing
     * @return \BitmovinApiSdk\Models\ProgressiveMovMuxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\ProgressiveMovMuxing $progressiveMovMuxing) : \BitmovinApiSdk\Models\ProgressiveMovMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/progressive-mov', $pathParams,  null, $progressiveMovMuxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ProgressiveMovMuxing::class);
    }

    /**
     * Delete Progressive MOV Muxing
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/progressive-mov/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Progressive MOV Muxing Details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\ProgressiveMovMuxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\ProgressiveMovMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/progressive-mov/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ProgressiveMovMuxing::class);
    }

    /**
     * List Progressive MOV Muxings
     *
     * @param string $encodingId
     * @param ProgressiveMovMuxingListQueryParams|null $queryParams
     * @return ProgressiveMovMuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, ProgressiveMovMuxingListQueryParams $queryParams = null) : ProgressiveMovMuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/progressive-mov', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ProgressiveMovMuxingPaginationResponse::class);
    }
}
