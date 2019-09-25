<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Ac3;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Ac3\Customdata\CustomdataApi;

class Ac3Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * Ac3Api constructor.
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
     * Create AC3 Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\Ac3AudioConfiguration $ac3AudioConfiguration
     * @return \BitmovinApiSdk\Models\Ac3AudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Ac3AudioConfiguration $ac3AudioConfiguration) : \BitmovinApiSdk\Models\Ac3AudioConfiguration
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/configurations/audio/ac3', [],  null, $ac3AudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Ac3AudioConfiguration::class);
    }

    /**
     * Delete AC3 Codec Configuration
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
        $response = $this->httpWrapper->request('DELETE','/encoding/configurations/audio/ac3/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * AC3 Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\Ac3AudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\Ac3AudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/configurations/audio/ac3/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Ac3AudioConfiguration::class);
    }

    /**
     * List AC3 Configurations
     *
     * @param Ac3AudioConfigurationListQueryParams|null $queryParams
     * @return Ac3AudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(Ac3AudioConfigurationListQueryParams $queryParams = null) : Ac3AudioConfigurationPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/configurations/audio/ac3', [], $queryParams, null, true);

        return ObjectMapper::map($response, Ac3AudioConfigurationPaginationResponse::class);
    }
}
