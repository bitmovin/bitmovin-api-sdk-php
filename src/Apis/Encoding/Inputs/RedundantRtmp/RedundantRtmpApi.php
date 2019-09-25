<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\RedundantRtmp;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class RedundantRtmpApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * RedundantRtmpApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create Redundant RTMP Input
     *
     * @param \BitmovinApiSdk\Models\RedundantRtmpInput $redundantRtmpInput
     * @return \BitmovinApiSdk\Models\RedundantRtmpInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\RedundantRtmpInput $redundantRtmpInput) : \BitmovinApiSdk\Models\RedundantRtmpInput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/inputs/redundant-rtmp', [],  null, $redundantRtmpInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\RedundantRtmpInput::class);
    }

    /**
     * Delete Redundant RTMP Input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/inputs/redundant-rtmp/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Redundant RTMP Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\RedundantRtmpInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\RedundantRtmpInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/redundant-rtmp/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\RedundantRtmpInput::class);
    }

    /**
     * List Redundant RTMP Inputs
     *
     * @param RedundantRtmpInputListQueryParams|null $queryParams
     * @return RedundantRtmpInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(RedundantRtmpInputListQueryParams $queryParams = null) : RedundantRtmpInputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/redundant-rtmp', [], $queryParams, null, true);

        return ObjectMapper::map($response, RedundantRtmpInputPaginationResponse::class);
    }
}
