<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Udp;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class UdpApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * UdpApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * UDP Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\UdpInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\UdpInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/udp/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\UdpInput::class);
    }

    /**
     * List UDP inputs
     *
     * @param UdpInputListQueryParams|null $queryParams
     * @return UdpInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(UdpInputListQueryParams $queryParams = null) : UdpInputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/udp', [], $queryParams, null, true);

        return ObjectMapper::map($response, UdpInputPaginationResponse::class);
    }
}
