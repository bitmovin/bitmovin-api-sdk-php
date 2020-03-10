<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\H265;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Video\H265\Customdata\CustomdataApi;

class H265Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * H265Api constructor.
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
     * Create H265/HEVC Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\H265VideoConfiguration $h265VideoConfiguration
     * @return \BitmovinApiSdk\Models\H265VideoConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\H265VideoConfiguration $h265VideoConfiguration) : \BitmovinApiSdk\Models\H265VideoConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/video/h265', [],  null, $h265VideoConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\H265VideoConfiguration::class);
    }

    /**
     * Delete H265/HEVC Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/video/h265/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * H265/HEVC Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\H265VideoConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\H265VideoConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/video/h265/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\H265VideoConfiguration::class);
    }

    /**
     * List H265/HEVC Codec Configurations
     *
     * @param H265VideoConfigurationListQueryParams|null $queryParams
     * @return H265VideoConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(H265VideoConfigurationListQueryParams $queryParams = null) : H265VideoConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/video/h265', [], $queryParams, null, true);

        return ObjectMapper::map($response, H265VideoConfigurationPaginationResponse::class);
    }
}
