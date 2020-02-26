<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Information\InformationApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\Id3Api;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Drm\DrmApi;

class ProgressiveTsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var InformationApi */
    public $information;

    /** @var Id3Api */
    public $id3;

    /** @var DrmApi */
    public $drm;

    /**
     * ProgressiveTsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->information = new InformationApi(null, $this->httpWrapper);
        $this->id3 = new Id3Api(null, $this->httpWrapper);
        $this->drm = new DrmApi(null, $this->httpWrapper);
    }

    /**
     * Add Progressive TS muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\ProgressiveTsMuxing $progressiveTsMuxing
     * @return \BitmovinApiSdk\Models\ProgressiveTsMuxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\ProgressiveTsMuxing $progressiveTsMuxing) : \BitmovinApiSdk\Models\ProgressiveTsMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/progressive-ts', $pathParams,  null, $progressiveTsMuxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ProgressiveTsMuxing::class);
    }

    /**
     * Delete Progressive TS muxing
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Progressive TS muxing details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\ProgressiveTsMuxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\ProgressiveTsMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ProgressiveTsMuxing::class);
    }

    /**
     * List Progressive TS muxings
     *
     * @param string $encodingId
     * @param ProgressiveTsMuxingListQueryParams|null $queryParams
     * @return ProgressiveTsMuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, ProgressiveTsMuxingListQueryParams $queryParams = null) : ProgressiveTsMuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/progressive-ts', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ProgressiveTsMuxingPaginationResponse::class);
    }
}
