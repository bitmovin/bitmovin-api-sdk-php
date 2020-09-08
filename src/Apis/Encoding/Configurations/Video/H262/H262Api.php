<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\H262;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Video\H262\Customdata\CustomdataApi;

class H262Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * H262Api constructor.
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
     * Create H262 Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\H262VideoConfiguration $h262VideoConfiguration
     * @return \BitmovinApiSdk\Models\H262VideoConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\H262VideoConfiguration $h262VideoConfiguration) : \BitmovinApiSdk\Models\H262VideoConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/video/h262', [],  null, $h262VideoConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\H262VideoConfiguration::class);
    }

    /**
     * Delete H262 Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/video/h262/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * H262 Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\H262VideoConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\H262VideoConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/video/h262/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\H262VideoConfiguration::class);
    }

    /**
     * List H262 Codec Configurations
     *
     * @param H262VideoConfigurationListQueryParams|null $queryParams
     * @return H262VideoConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(H262VideoConfigurationListQueryParams $queryParams = null) : H262VideoConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/video/h262', [], $queryParams, null, true);

        return ObjectMapper::map($response, H262VideoConfigurationPaginationResponse::class);
    }
}
