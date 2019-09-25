<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ChunkedText;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ChunkedText\Customdata\CustomdataApi;

class ChunkedTextApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * ChunkedTextApi constructor.
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
     * Add Chunked Text Muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\ChunkedTextMuxing $chunkedTextMuxing
     * @return \BitmovinApiSdk\Models\ChunkedTextMuxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\ChunkedTextMuxing $chunkedTextMuxing) : \BitmovinApiSdk\Models\ChunkedTextMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/chunked-text', $pathParams,  null, $chunkedTextMuxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ChunkedTextMuxing::class);
    }

    /**
     * Delete Chunked Text Muxing
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/chunked-text/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Chunked Text Muxing Details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\ChunkedTextMuxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\ChunkedTextMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/chunked-text/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ChunkedTextMuxing::class);
    }

    /**
     * List Chunked Text Muxings
     *
     * @param string $encodingId
     * @param ChunkedTextMuxingListQueryParams|null $queryParams
     * @return ChunkedTextMuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, ChunkedTextMuxingListQueryParams $queryParams = null) : ChunkedTextMuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/chunked-text', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ChunkedTextMuxingPaginationResponse::class);
    }
}
