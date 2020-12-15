<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\StaticIps;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class StaticIpsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * StaticIpsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Static IP Address
     *
     * @param \BitmovinApiSdk\Models\StaticIp $staticIp
     * @return \BitmovinApiSdk\Models\StaticIp
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\StaticIp $staticIp) : \BitmovinApiSdk\Models\StaticIp
    {
        $response = $this->httpWrapper->request('POST', '/encoding/infrastructure/static-ips', [],  null, $staticIp, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StaticIp::class);
    }

    /**
     * Delete Static IP Address
     *
     * @param string $id
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $id) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'id' => $id,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/infrastructure/static-ips/{id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Static IP Address Details
     *
     * @param string $id
     * @return \BitmovinApiSdk\Models\StaticIp
     * @throws BitmovinApiException
     */
    public function get(string $id) : \BitmovinApiSdk\Models\StaticIp
    {
        $pathParams = [
            'id' => $id,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/static-ips/{id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StaticIp::class);
    }

    /**
     * List all Static IP Addresses
     *
     * @param StaticIpListQueryParams|null $queryParams
     * @return StaticIpPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(StaticIpListQueryParams $queryParams = null) : StaticIpPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/infrastructure/static-ips', [], $queryParams, null, true);

        return ObjectMapper::map($response, StaticIpPaginationResponse::class);
    }
}
