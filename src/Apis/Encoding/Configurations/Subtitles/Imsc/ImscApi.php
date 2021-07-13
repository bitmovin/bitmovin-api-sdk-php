<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\Imsc;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\Imsc\Customdata\CustomdataApi;

class ImscApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * ImscApi constructor.
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
     * Create IMSC subtitle configuration
     *
     * @param \BitmovinApiSdk\Models\ImscConfiguration $imscConfiguration
     * @return \BitmovinApiSdk\Models\ImscConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\ImscConfiguration $imscConfiguration) : \BitmovinApiSdk\Models\ImscConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/subtitles/imsc', [],  null, $imscConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ImscConfiguration::class);
    }

    /**
     * Delete IMSC subtitle configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/subtitles/imsc/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * IMSC subtitle configuration details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\ImscConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\ImscConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/subtitles/imsc/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ImscConfiguration::class);
    }

    /**
     * List IMSC subtitle configurations
     *
     * @param ImscConfigurationListQueryParams|null $queryParams
     * @return ImscConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(ImscConfigurationListQueryParams $queryParams = null) : ImscConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/subtitles/imsc', [], $queryParams, null, true);

        return ObjectMapper::map($response, ImscConfigurationPaginationResponse::class);
    }
}
