<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DolbyDigital;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DolbyDigital\Customdata\CustomdataApi;

class DolbyDigitalApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * DolbyDigitalApi constructor.
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
     * Create Dolby Digital Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\DolbyDigitalAudioConfiguration $dolbyDigitalAudioConfiguration
     * @return \BitmovinApiSdk\Models\DolbyDigitalAudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DolbyDigitalAudioConfiguration $dolbyDigitalAudioConfiguration) : \BitmovinApiSdk\Models\DolbyDigitalAudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/dolby-digital', [],  null, $dolbyDigitalAudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyDigitalAudioConfiguration::class);
    }

    /**
     * Delete Dolby Digital Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/dolby-digital/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Dolby Digital Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\DolbyDigitalAudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\DolbyDigitalAudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/dolby-digital/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyDigitalAudioConfiguration::class);
    }

    /**
     * List Dolby Digital Codec Configurations
     *
     * @param DolbyDigitalAudioConfigurationListQueryParams|null $queryParams
     * @return DolbyDigitalAudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DolbyDigitalAudioConfigurationListQueryParams $queryParams = null) : DolbyDigitalAudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/dolby-digital', [], $queryParams, null, true);

        return ObjectMapper::map($response, DolbyDigitalAudioConfigurationPaginationResponse::class);
    }
}
