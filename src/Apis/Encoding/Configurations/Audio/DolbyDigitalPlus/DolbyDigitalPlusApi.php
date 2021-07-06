<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DolbyDigitalPlus;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DolbyDigitalPlus\Customdata\CustomdataApi;

class DolbyDigitalPlusApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * DolbyDigitalPlusApi constructor.
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
     * Create Dolby Digital Plus Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\DolbyDigitalPlusAudioConfiguration $dolbyDigitalPlusAudioConfiguration
     * @return \BitmovinApiSdk\Models\DolbyDigitalPlusAudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DolbyDigitalPlusAudioConfiguration $dolbyDigitalPlusAudioConfiguration) : \BitmovinApiSdk\Models\DolbyDigitalPlusAudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/dolby-digital-plus', [],  null, $dolbyDigitalPlusAudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyDigitalPlusAudioConfiguration::class);
    }

    /**
     * Delete Dolby Digital Plus Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/dolby-digital-plus/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Dolby Digital Plus Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\DolbyDigitalPlusAudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\DolbyDigitalPlusAudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/dolby-digital-plus/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyDigitalPlusAudioConfiguration::class);
    }

    /**
     * List Dolby Digital Plus Codec Configurations
     *
     * @param DolbyDigitalPlusAudioConfigurationListQueryParams|null $queryParams
     * @return DolbyDigitalPlusAudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DolbyDigitalPlusAudioConfigurationListQueryParams $queryParams = null) : DolbyDigitalPlusAudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/dolby-digital-plus', [], $queryParams, null, true);

        return ObjectMapper::map($response, DolbyDigitalPlusAudioConfigurationPaginationResponse::class);
    }
}
