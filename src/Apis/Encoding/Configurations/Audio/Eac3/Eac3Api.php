<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Eac3;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Eac3\Customdata\CustomdataApi;

class Eac3Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * Eac3Api constructor.
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
     * Create E-AC3 Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\Eac3AudioConfiguration $eac3AudioConfiguration
     * @return \BitmovinApiSdk\Models\Eac3AudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Eac3AudioConfiguration $eac3AudioConfiguration) : \BitmovinApiSdk\Models\Eac3AudioConfiguration
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/configurations/audio/eac3', [],  null, $eac3AudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Eac3AudioConfiguration::class);
    }

    /**
     * Delete E-AC3 Codec Configuration
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
        $response = $this->httpWrapper->request('DELETE','/encoding/configurations/audio/eac3/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * E-AC3 Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\Eac3AudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\Eac3AudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/configurations/audio/eac3/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Eac3AudioConfiguration::class);
    }

    /**
     * List E-AC3 Configurations
     *
     * @param Eac3AudioConfigurationListQueryParams|null $queryParams
     * @return Eac3AudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(Eac3AudioConfigurationListQueryParams $queryParams = null) : Eac3AudioConfigurationPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/configurations/audio/eac3', [], $queryParams, null, true);

        return ObjectMapper::map($response, Eac3AudioConfigurationPaginationResponse::class);
    }
}
