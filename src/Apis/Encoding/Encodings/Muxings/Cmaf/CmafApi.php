<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Cmaf;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Cmaf\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Cmaf\Captions\CaptionsApi;

class CmafApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var CaptionsApi */
    public $captions;

    /**
     * CmafApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->captions = new CaptionsApi(null, $this->httpWrapper);
    }

    /**
     * Add CMAF muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\CmafMuxing $cmafMuxing
     * @return \BitmovinApiSdk\Models\CmafMuxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\CmafMuxing $cmafMuxing) : \BitmovinApiSdk\Models\CmafMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/cmaf', $pathParams,  null, $cmafMuxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CmafMuxing::class);
    }

    /**
     * Delete CMAF Muxing
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/cmaf/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * CMAF Muxing Details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\CmafMuxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\CmafMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/cmaf/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CmafMuxing::class);
    }

    /**
     * List CMAF muxings
     *
     * @param string $encodingId
     * @param CmafMuxingListQueryParams|null $queryParams
     * @return CmafMuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, CmafMuxingListQueryParams $queryParams = null) : CmafMuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/cmaf', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, CmafMuxingPaginationResponse::class);
    }
}
