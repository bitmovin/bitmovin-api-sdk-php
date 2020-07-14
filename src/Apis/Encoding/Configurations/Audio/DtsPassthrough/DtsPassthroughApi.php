<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DtsPassthrough;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DtsPassthrough\Customdata\CustomdataApi;

class DtsPassthroughApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * DtsPassthroughApi constructor.
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
     * Create DTS Passthrough Configuration
     *
     * @param \BitmovinApiSdk\Models\DtsPassthroughAudioConfiguration $dtsPassthroughAudioConfiguration
     * @return \BitmovinApiSdk\Models\DtsPassthroughAudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DtsPassthroughAudioConfiguration $dtsPassthroughAudioConfiguration) : \BitmovinApiSdk\Models\DtsPassthroughAudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/dts-passthrough', [],  null, $dtsPassthroughAudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DtsPassthroughAudioConfiguration::class);
    }

    /**
     * Delete DTS Passthrough Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/dts-passthrough/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * DTS Passthrough Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\DtsPassthroughAudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\DtsPassthroughAudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/dts-passthrough/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DtsPassthroughAudioConfiguration::class);
    }

    /**
     * List DTS Passthrough Configurations
     *
     * @param DtsPassthroughAudioConfigurationListQueryParams|null $queryParams
     * @return DtsPassthroughAudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DtsPassthroughAudioConfigurationListQueryParams $queryParams = null) : DtsPassthroughAudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/dts-passthrough', [], $queryParams, null, true);

        return ObjectMapper::map($response, DtsPassthroughAudioConfigurationPaginationResponse::class);
    }
}
