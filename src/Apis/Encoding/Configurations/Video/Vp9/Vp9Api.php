<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\Vp9;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Video\Vp9\Customdata\CustomdataApi;

class Vp9Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * Vp9Api constructor.
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
     * Create VP9 Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\Vp9VideoConfiguration $vp9VideoConfiguration
     * @return \BitmovinApiSdk\Models\Vp9VideoConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Vp9VideoConfiguration $vp9VideoConfiguration) : \BitmovinApiSdk\Models\Vp9VideoConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/video/vp9', [],  null, $vp9VideoConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Vp9VideoConfiguration::class);
    }

    /**
     * Delete VP9 Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/video/vp9/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * VP9 Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\Vp9VideoConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\Vp9VideoConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/video/vp9/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Vp9VideoConfiguration::class);
    }

    /**
     * List VP9 Codec Configurations
     *
     * @param Vp9VideoConfigurationListQueryParams|null $queryParams
     * @return Vp9VideoConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(Vp9VideoConfigurationListQueryParams $queryParams = null) : Vp9VideoConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/video/vp9', [], $queryParams, null, true);

        return ObjectMapper::map($response, Vp9VideoConfigurationPaginationResponse::class);
    }
}
