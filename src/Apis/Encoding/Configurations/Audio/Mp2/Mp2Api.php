<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Mp2;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Mp2\Customdata\CustomdataApi;

class Mp2Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * Mp2Api constructor.
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
     * Create MP2 Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\Mp2AudioConfiguration $mp2AudioConfiguration
     * @return \BitmovinApiSdk\Models\Mp2AudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Mp2AudioConfiguration $mp2AudioConfiguration) : \BitmovinApiSdk\Models\Mp2AudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/mp2', [],  null, $mp2AudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Mp2AudioConfiguration::class);
    }

    /**
     * Delete MP2 Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/mp2/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * MP2 Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\Mp2AudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\Mp2AudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/mp2/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Mp2AudioConfiguration::class);
    }

    /**
     * List MP2 Configurations
     *
     * @param Mp2AudioConfigurationListQueryParams|null $queryParams
     * @return Mp2AudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(Mp2AudioConfigurationListQueryParams $queryParams = null) : Mp2AudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/mp2', [], $queryParams, null, true);

        return ObjectMapper::map($response, Mp2AudioConfigurationPaginationResponse::class);
    }
}
