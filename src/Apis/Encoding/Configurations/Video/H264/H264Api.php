<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\H264;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Video\H264\Customdata\CustomdataApi;

class H264Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * H264Api constructor.
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
     * Create H264/AVC Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\H264VideoConfiguration $h264VideoConfiguration
     * @return \BitmovinApiSdk\Models\H264VideoConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\H264VideoConfiguration $h264VideoConfiguration) : \BitmovinApiSdk\Models\H264VideoConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/video/h264', [],  null, $h264VideoConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\H264VideoConfiguration::class);
    }

    /**
     * Delete H264/AVC Codec Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/video/h264/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * H264/AVC Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\H264VideoConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\H264VideoConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/video/h264/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\H264VideoConfiguration::class);
    }

    /**
     * List H264/AVC Codec Configurations
     *
     * @param H264VideoConfigurationListQueryParams|null $queryParams
     * @return H264VideoConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(H264VideoConfigurationListQueryParams $queryParams = null) : H264VideoConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/video/h264', [], $queryParams, null, true);

        return ObjectMapper::map($response, H264VideoConfigurationPaginationResponse::class);
    }
}
