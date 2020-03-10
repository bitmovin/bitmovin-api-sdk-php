<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\Av1;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Video\Av1\Customdata\CustomdataApi;

class Av1Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * Av1Api constructor.
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
     * Create AV1 Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\Av1VideoConfiguration $av1VideoConfiguration
     * @return \BitmovinApiSdk\Models\Av1VideoConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Av1VideoConfiguration $av1VideoConfiguration) : \BitmovinApiSdk\Models\Av1VideoConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/video/av1', [],  null, $av1VideoConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Av1VideoConfiguration::class);
    }

    /**
     * Delete AV1 Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/video/av1/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * AV1 Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\Av1VideoConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\Av1VideoConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/video/av1/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Av1VideoConfiguration::class);
    }

    /**
     * List AV1 Codec Configurations
     *
     * @param Av1VideoConfigurationListQueryParams|null $queryParams
     * @return Av1VideoConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(Av1VideoConfigurationListQueryParams $queryParams = null) : Av1VideoConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/video/av1', [], $queryParams, null, true);

        return ObjectMapper::map($response, Av1VideoConfigurationPaginationResponse::class);
    }
}
