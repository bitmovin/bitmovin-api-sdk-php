<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Hls;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class HlsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * HlsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create HLS input
     *
     * @param \BitmovinApiSdk\Models\HlsInput $hlsInput
     * @return \BitmovinApiSdk\Models\HlsInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\HlsInput $hlsInput) : \BitmovinApiSdk\Models\HlsInput
    {
        $response = $this->httpWrapper->request('POST', '/encoding/inputs/hls', [],  null, $hlsInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HlsInput::class);
    }

    /**
     * Delete HLS Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\HlsInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\HlsInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/inputs/hls/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HlsInput::class);
    }

    /**
     * HLS Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\HlsInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\HlsInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/inputs/hls/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HlsInput::class);
    }

    /**
     * List HLS inputs
     *
     * @param HlsInputListQueryParams|null $queryParams
     * @return HlsInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(HlsInputListQueryParams $queryParams = null) : HlsInputPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/inputs/hls', [], $queryParams, null, true);

        return ObjectMapper::map($response, HlsInputPaginationResponse::class);
    }
}
