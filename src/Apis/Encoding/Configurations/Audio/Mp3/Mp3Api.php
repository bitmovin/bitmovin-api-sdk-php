<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Mp3;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Mp3\Customdata\CustomdataApi;

class Mp3Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * Mp3Api constructor.
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
     * Create MP3 Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\Mp3AudioConfiguration $mp3AudioConfiguration
     * @return \BitmovinApiSdk\Models\Mp3AudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Mp3AudioConfiguration $mp3AudioConfiguration) : \BitmovinApiSdk\Models\Mp3AudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/mp3', [],  null, $mp3AudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Mp3AudioConfiguration::class);
    }

    /**
     * Delete MP3 Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/mp3/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * MP3 Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\Mp3AudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\Mp3AudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/mp3/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Mp3AudioConfiguration::class);
    }

    /**
     * List MP3 Configurations
     *
     * @param Mp3AudioConfigurationListQueryParams|null $queryParams
     * @return Mp3AudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(Mp3AudioConfigurationListQueryParams $queryParams = null) : Mp3AudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/mp3', [], $queryParams, null, true);

        return ObjectMapper::map($response, Mp3AudioConfigurationPaginationResponse::class);
    }
}
