<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Tcp;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class TcpApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * TcpApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * TCP Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\TcpInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\TcpInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/tcp/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TcpInput::class);
    }

    /**
     * List TCP inputs
     *
     * @param TcpInputListQueryParams|null $queryParams
     * @return TcpInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(TcpInputListQueryParams $queryParams = null) : TcpInputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/tcp', [], $queryParams, null, true);

        return ObjectMapper::map($response, TcpInputPaginationResponse::class);
    }
}
