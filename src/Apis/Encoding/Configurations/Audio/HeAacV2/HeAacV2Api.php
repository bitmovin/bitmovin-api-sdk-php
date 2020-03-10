<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\HeAacV2;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\HeAacV2\Customdata\CustomdataApi;

class HeAacV2Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * HeAacV2Api constructor.
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
     * Create HE-AAC v2 Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\HeAacV2AudioConfiguration $heAacV2AudioConfiguration
     * @return \BitmovinApiSdk\Models\HeAacV2AudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\HeAacV2AudioConfiguration $heAacV2AudioConfiguration) : \BitmovinApiSdk\Models\HeAacV2AudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/he-aac-v2', [],  null, $heAacV2AudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HeAacV2AudioConfiguration::class);
    }

    /**
     * Delete HE-AAC v2 Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/he-aac-v2/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * HE-AAC v2 Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\HeAacV2AudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\HeAacV2AudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/he-aac-v2/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\HeAacV2AudioConfiguration::class);
    }

    /**
     * List HE-AAC v2 Configurations
     *
     * @param HeAacV2AudioConfigurationListQueryParams|null $queryParams
     * @return HeAacV2AudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(HeAacV2AudioConfigurationListQueryParams $queryParams = null) : HeAacV2AudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/he-aac-v2', [], $queryParams, null, true);

        return ObjectMapper::map($response, HeAacV2AudioConfigurationPaginationResponse::class);
    }
}
