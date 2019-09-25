<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\UdpMulticast;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Inputs\UdpMulticast\Customdata\CustomdataApi;

class UdpMulticastApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * UdpMulticastApi constructor.
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
     * Create UDP multicast input
     *
     * @param \BitmovinApiSdk\Models\UdpMulticastInput $udpMulticastInput
     * @return \BitmovinApiSdk\Models\UdpMulticastInput
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\UdpMulticastInput $udpMulticastInput) : \BitmovinApiSdk\Models\UdpMulticastInput
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/inputs/udp-multicast', [],  null, $udpMulticastInput, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\UdpMulticastInput::class);
    }

    /**
     * Delete UDP multicast input
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\UdpMulticastInput
     * @throws BitmovinApiException
     */
    public function delete(string $inputId) : \BitmovinApiSdk\Models\UdpMulticastInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/inputs/udp-multicast/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\UdpMulticastInput::class);
    }

    /**
     * UDP multicast Input Details
     *
     * @param string $inputId
     * @return \BitmovinApiSdk\Models\UdpMulticastInput
     * @throws BitmovinApiException
     */
    public function get(string $inputId) : \BitmovinApiSdk\Models\UdpMulticastInput
    {
        $pathParams = [
            'input_id' => $inputId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/inputs/udp-multicast/{input_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\UdpMulticastInput::class);
    }

    /**
     * List UDP multicast inputs
     *
     * @param UdpMulticastInputListQueryParams|null $queryParams
     * @return UdpMulticastInputPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(UdpMulticastInputListQueryParams $queryParams = null) : UdpMulticastInputPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/inputs/udp-multicast', [], $queryParams, null, true);

        return ObjectMapper::map($response, UdpMulticastInputPaginationResponse::class);
    }
}
