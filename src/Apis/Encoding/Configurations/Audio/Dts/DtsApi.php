<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Dts;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Dts\Customdata\CustomdataApi;

class DtsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * DtsApi constructor.
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
     * Create DTS Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\DtsAudioConfiguration $dtsAudioConfiguration
     * @return \BitmovinApiSdk\Models\DtsAudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DtsAudioConfiguration $dtsAudioConfiguration) : \BitmovinApiSdk\Models\DtsAudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/dts', [],  null, $dtsAudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DtsAudioConfiguration::class);
    }

    /**
     * Delete DTS Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/dts/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * DTS Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\DtsAudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\DtsAudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/dts/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DtsAudioConfiguration::class);
    }

    /**
     * List DTS Codec Configurations
     *
     * @param DtsAudioConfigurationListQueryParams|null $queryParams
     * @return DtsAudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DtsAudioConfigurationListQueryParams $queryParams = null) : DtsAudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/dts', [], $queryParams, null, true);

        return ObjectMapper::map($response, DtsAudioConfigurationPaginationResponse::class);
    }
}
