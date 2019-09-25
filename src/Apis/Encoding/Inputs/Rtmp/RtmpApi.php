<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Rtmp;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class RtmpApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * RtmpApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * RTMP Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\RtmpInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\RtmpInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/rtmp/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\RtmpInput::class);
    }

    /**
     * List RTMP Inputs
     *
     * @param RtmpInputListQueryParams|null $queryParams
     * @return RtmpInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(RtmpInputListQueryParams $queryParams = null) : RtmpInputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/rtmp', [], $queryParams, null, true);

        return ObjectMapper::map($response, RtmpInputPaginationResponse::class);
    }
}
