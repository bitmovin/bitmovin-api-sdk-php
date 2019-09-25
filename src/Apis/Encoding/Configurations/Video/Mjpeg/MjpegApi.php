<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\Mjpeg;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Video\Mjpeg\Customdata\CustomdataApi;

class MjpegApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * MjpegApi constructor.
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
     * Create MJPEG Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\MjpegVideoConfiguration $mjpegVideoConfiguration
     * @return \BitmovinApiSdk\Models\MjpegVideoConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\MjpegVideoConfiguration $mjpegVideoConfiguration) : \BitmovinApiSdk\Models\MjpegVideoConfiguration
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/configurations/video/mjpeg', [],  null, $mjpegVideoConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\MjpegVideoConfiguration::class);
    }

    /**
     * Delete MJPEG Codec Configuration
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
        $response = $this->httpWrapper->request('DELETE','/encoding/configurations/video/mjpeg/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * MJPEG Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\MjpegVideoConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\MjpegVideoConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/configurations/video/mjpeg/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\MjpegVideoConfiguration::class);
    }

    /**
     * List MJPEG Configurations
     *
     * @param MjpegVideoConfigurationListQueryParams|null $queryParams
     * @return MjpegVideoConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(MjpegVideoConfigurationListQueryParams $queryParams = null) : MjpegVideoConfigurationPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/configurations/video/mjpeg', [], $queryParams, null, true);

        return ObjectMapper::map($response, MjpegVideoConfigurationPaginationResponse::class);
    }
}
