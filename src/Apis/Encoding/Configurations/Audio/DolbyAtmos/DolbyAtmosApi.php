<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DolbyAtmos;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DolbyAtmos\Customdata\CustomdataApi;

class DolbyAtmosApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * DolbyAtmosApi constructor.
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
     * Create Dolby Atmos Configuration
     *
     * @param \BitmovinApiSdk\Models\DolbyAtmosAudioConfiguration $dolbyAtmosAudioConfiguration
     * @return \BitmovinApiSdk\Models\DolbyAtmosAudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DolbyAtmosAudioConfiguration $dolbyAtmosAudioConfiguration) : \BitmovinApiSdk\Models\DolbyAtmosAudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/dolby-atmos', [],  null, $dolbyAtmosAudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyAtmosAudioConfiguration::class);
    }

    /**
     * Delete Dolby Atmos Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/dolby-atmos/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Dolby Atmos Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\DolbyAtmosAudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\DolbyAtmosAudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/dolby-atmos/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyAtmosAudioConfiguration::class);
    }

    /**
     * List Dolby Atmos Configurations
     *
     * @param DolbyAtmosAudioConfigurationListQueryParams|null $queryParams
     * @return DolbyAtmosAudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DolbyAtmosAudioConfigurationListQueryParams $queryParams = null) : DolbyAtmosAudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/dolby-atmos', [], $queryParams, null, true);

        return ObjectMapper::map($response, DolbyAtmosAudioConfigurationPaginationResponse::class);
    }
}
