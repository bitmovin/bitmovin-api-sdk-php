<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Aac;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Aac\Customdata\CustomdataApi;

class AacApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * AacApi constructor.
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
     * Create AAC Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\AacAudioConfiguration $aacAudioConfiguration
     * @return \BitmovinApiSdk\Models\AacAudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\AacAudioConfiguration $aacAudioConfiguration) : \BitmovinApiSdk\Models\AacAudioConfiguration
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/configurations/audio/aac', [],  null, $aacAudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AacAudioConfiguration::class);
    }

    /**
     * Delete AAC Codec Configuration
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
        $response = $this->httpWrapper->request('DELETE','/encoding/configurations/audio/aac/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * AAC Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\AacAudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\AacAudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/configurations/audio/aac/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AacAudioConfiguration::class);
    }

    /**
     * List AAC Configurations
     *
     * @param AacAudioConfigurationListQueryParams|null $queryParams
     * @return AacAudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(AacAudioConfigurationListQueryParams $queryParams = null) : AacAudioConfigurationPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/configurations/audio/aac', [], $queryParams, null, true);

        return ObjectMapper::map($response, AacAudioConfigurationPaginationResponse::class);
    }
}
