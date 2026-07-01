<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\H265v2;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class H265v2Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * H265v2Api constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create H265 V2 Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\H265V2VideoConfiguration $h265V2VideoConfiguration
     * @return \BitmovinApiSdk\Models\H265V2VideoConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\H265V2VideoConfiguration $h265V2VideoConfiguration) : \BitmovinApiSdk\Models\H265V2VideoConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/video/h265v2', [],  null, $h265V2VideoConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\H265V2VideoConfiguration::class);
    }

    /**
     * Delete H265 V2 Codec Configuration
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $configurationId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/video/h265v2/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * H265 V2 Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\H265V2VideoConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\H265V2VideoConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/video/h265v2/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\H265V2VideoConfiguration::class);
    }

    /**
     * List H265 V2 Codec Configurations
     *
     * @param H265V2VideoConfigurationListQueryParams|null $queryParams
     * @return H265V2VideoConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(H265V2VideoConfigurationListQueryParams $queryParams = null) : H265V2VideoConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/video/h265v2', [], $queryParams, null, true);

        return ObjectMapper::map($response, H265V2VideoConfigurationPaginationResponse::class);
    }
}
