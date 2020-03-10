<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Opus;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Opus\Customdata\CustomdataApi;

class OpusApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * OpusApi constructor.
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
     * Create Opus Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\OpusAudioConfiguration $opusAudioConfiguration
     * @return \BitmovinApiSdk\Models\OpusAudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\OpusAudioConfiguration $opusAudioConfiguration) : \BitmovinApiSdk\Models\OpusAudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/opus', [],  null, $opusAudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\OpusAudioConfiguration::class);
    }

    /**
     * Delete Opus Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/opus/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Opus Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\OpusAudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\OpusAudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/opus/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\OpusAudioConfiguration::class);
    }

    /**
     * List Opus Configurations
     *
     * @param OpusAudioConfigurationListQueryParams|null $queryParams
     * @return OpusAudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(OpusAudioConfigurationListQueryParams $queryParams = null) : OpusAudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/opus', [], $queryParams, null, true);

        return ObjectMapper::map($response, OpusAudioConfigurationPaginationResponse::class);
    }
}
