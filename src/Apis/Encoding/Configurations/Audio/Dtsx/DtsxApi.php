<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Dtsx;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Dtsx\Customdata\CustomdataApi;

class DtsxApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * DtsxApi constructor.
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
     * Create DTS:X Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\DtsXAudioConfiguration $dtsXAudioConfiguration
     * @return \BitmovinApiSdk\Models\DtsXAudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DtsXAudioConfiguration $dtsXAudioConfiguration) : \BitmovinApiSdk\Models\DtsXAudioConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/audio/dtsx', [],  null, $dtsXAudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DtsXAudioConfiguration::class);
    }

    /**
     * Delete DTS:X Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/audio/dtsx/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * DTS:X Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\DtsXAudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\DtsXAudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/dtsx/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DtsXAudioConfiguration::class);
    }

    /**
     * List DTS:X Codec Configurations
     *
     * @param DtsXAudioConfigurationListQueryParams|null $queryParams
     * @return DtsXAudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DtsXAudioConfigurationListQueryParams $queryParams = null) : DtsXAudioConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/audio/dtsx', [], $queryParams, null, true);

        return ObjectMapper::map($response, DtsXAudioConfigurationPaginationResponse::class);
    }
}
