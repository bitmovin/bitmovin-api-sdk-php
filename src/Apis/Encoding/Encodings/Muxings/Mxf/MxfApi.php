<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mxf;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mxf\Customdata\CustomdataApi;

class MxfApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * MxfApi constructor.
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
     * Add MXF muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\MxfMuxing $mxfMuxing
     * @return \BitmovinApiSdk\Models\MxfMuxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\MxfMuxing $mxfMuxing) : \BitmovinApiSdk\Models\MxfMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/muxings/mxf', $pathParams,  null, $mxfMuxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\MxfMuxing::class);
    }

    /**
     * Delete MXF muxing
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/muxings/mxf/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * MXF muxing details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\MxfMuxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\MxfMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/mxf/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\MxfMuxing::class);
    }

    /**
     * List MXF muxings
     *
     * @param string $encodingId
     * @param MxfMuxingListQueryParams|null $queryParams
     * @return MxfMuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, MxfMuxingListQueryParams $queryParams = null) : MxfMuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/mxf', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, MxfMuxingPaginationResponse::class);
    }
}
