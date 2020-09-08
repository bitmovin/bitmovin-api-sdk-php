<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Pcm;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Pcm\Customdata\CustomdataApi;

class PcmApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * PcmApi constructor.
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
     * Create PCM Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\PcmAudioConfiguration $pcmAudioConfiguration
     * @return \BitmovinApiSdk\Models\PcmAudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\PcmAudioConfiguration $pcmAudioConfiguration) : \BitmovinApiSdk\Models\PcmAudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/pcm', [],  null, $pcmAudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PcmAudioConfiguration::class);
    }

    /**
     * Delete PCM Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/pcm/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * PCM Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\PcmAudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\PcmAudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/pcm/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PcmAudioConfiguration::class);
    }

    /**
     * List PCM Configurations
     *
     * @param PcmAudioConfigurationListQueryParams|null $queryParams
     * @return PcmAudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(PcmAudioConfigurationListQueryParams $queryParams = null) : PcmAudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/pcm', [], $queryParams, null, true);

        return ObjectMapper::map($response, PcmAudioConfigurationPaginationResponse::class);
    }
}
