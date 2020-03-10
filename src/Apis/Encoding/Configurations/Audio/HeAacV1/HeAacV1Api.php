<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\HeAacV1;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\HeAacV1\Customdata\CustomdataApi;

class HeAacV1Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * HeAacV1Api constructor.
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
     * Create HE-AAC v1 Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\HeAacV1AudioConfiguration $heAacV1AudioConfiguration
     * @return \BitmovinApiSdk\Models\HeAacV1AudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\HeAacV1AudioConfiguration $heAacV1AudioConfiguration) : \BitmovinApiSdk\Models\HeAacV1AudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/he-aac-v1', [],  null, $heAacV1AudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HeAacV1AudioConfiguration::class);
    }

    /**
     * Delete HE-AAC v1 Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/he-aac-v1/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * HE-AAC v1 Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\HeAacV1AudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\HeAacV1AudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/he-aac-v1/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HeAacV1AudioConfiguration::class);
    }

    /**
     * List HE-AAC v1 Configurations
     *
     * @param HeAacV1AudioConfigurationListQueryParams|null $queryParams
     * @return HeAacV1AudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(HeAacV1AudioConfigurationListQueryParams $queryParams = null) : HeAacV1AudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/he-aac-v1', [], $queryParams, null, true);

        return ObjectMapper::map($response, HeAacV1AudioConfigurationPaginationResponse::class);
    }
}
