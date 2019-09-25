<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\SegmentedRaw;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\SegmentedRaw\Customdata\CustomdataApi;

class SegmentedRawApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * SegmentedRawApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
    }

    /**
     * Add Segmented RAW Muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\SegmentedRawMuxing $segmentedRawMuxing
     * @return \BitmovinApiSdk\Models\SegmentedRawMuxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\SegmentedRawMuxing $segmentedRawMuxing) : \BitmovinApiSdk\Models\SegmentedRawMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/segmented-raw', $pathParams,  null, $segmentedRawMuxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SegmentedRawMuxing::class);
    }

    /**
     * Delete Segmented RAW Muxing
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/segmented-raw/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Segmented RAW Muxing Details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\SegmentedRawMuxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\SegmentedRawMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/segmented-raw/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SegmentedRawMuxing::class);
    }

    /**
     * List Segmented RAW Muxings
     *
     * @param string $encodingId
     * @param SegmentedRawMuxingListQueryParams|null $queryParams
     * @return SegmentedRawMuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, SegmentedRawMuxingListQueryParams $queryParams = null) : SegmentedRawMuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/segmented-raw', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, SegmentedRawMuxingPaginationResponse::class);
    }
}
