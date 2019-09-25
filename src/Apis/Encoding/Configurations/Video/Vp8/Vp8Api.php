<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\Vp8;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Video\Vp8\Customdata\CustomdataApi;

class Vp8Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * Vp8Api constructor.
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
     * Create VP8 Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\Vp8VideoConfiguration $vp8VideoConfiguration
     * @return \BitmovinApiSdk\Models\Vp8VideoConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Vp8VideoConfiguration $vp8VideoConfiguration) : \BitmovinApiSdk\Models\Vp8VideoConfiguration
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/configurations/video/vp8', [],  null, $vp8VideoConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Vp8VideoConfiguration::class);
    }

    /**
     * Delete VP8 Codec Configuration
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
        $response = $this->httpWrapper->request('DELETE','/encoding/configurations/video/vp8/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * VP8 Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\Vp8VideoConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\Vp8VideoConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/configurations/video/vp8/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Vp8VideoConfiguration::class);
    }

    /**
     * 
     *
     * @param Vp8VideoConfigurationListQueryParams|null $queryParams
     * @return Vp8VideoConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(Vp8VideoConfigurationListQueryParams $queryParams = null) : Vp8VideoConfigurationPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/configurations/video/vp8', [], $queryParams, null, true);

        return ObjectMapper::map($response, Vp8VideoConfigurationPaginationResponse::class);
    }
}
