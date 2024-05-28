<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Passthrough;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class PassthroughApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * PassthroughApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create Audio Passthrough Configuration
     *
     * @param \BitmovinApiSdk\Models\PassthroughAudioConfiguration $passthroughAudioConfiguration
     * @return \BitmovinApiSdk\Models\PassthroughAudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\PassthroughAudioConfiguration $passthroughAudioConfiguration) : \BitmovinApiSdk\Models\PassthroughAudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/passthrough', [],  null, $passthroughAudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PassthroughAudioConfiguration::class);
    }

    /**
     * Delete Audio Passthrough Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/passthrough/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Audio Passthrough Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\PassthroughAudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\PassthroughAudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/passthrough/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PassthroughAudioConfiguration::class);
    }

    /**
     * List Audio Passthrough Configurations
     *
     * @param PassthroughAudioConfigurationListQueryParams|null $queryParams
     * @return PassthroughAudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(PassthroughAudioConfigurationListQueryParams $queryParams = null) : PassthroughAudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/passthrough', [], $queryParams, null, true);

        return ObjectMapper::map($response, PassthroughAudioConfigurationPaginationResponse::class);
    }
}
