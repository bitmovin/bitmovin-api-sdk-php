<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\Webvtt;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\Webvtt\Customdata\CustomdataApi;

class WebvttApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * WebvttApi constructor.
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
     * Create WebVtt Subtitle Configuration
     *
     * @param \BitmovinApiSdk\Models\WebVttConfiguration $webVttConfiguration
     * @return \BitmovinApiSdk\Models\WebVttConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\WebVttConfiguration $webVttConfiguration) : \BitmovinApiSdk\Models\WebVttConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/subtitles/webvtt/', [],  null, $webVttConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WebVttConfiguration::class);
    }

    /**
     * Delete WebVtt Subtitle Configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/subtitles/webvtt/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * WebVtt Subtitle Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\WebVttConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\WebVttConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/subtitles/webvtt/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WebVttConfiguration::class);
    }

    /**
     * List WebVtt Configurations
     *
     * @param WebVttConfigurationListQueryParams|null $queryParams
     * @return WebVttConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(WebVttConfigurationListQueryParams $queryParams = null) : WebVttConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/subtitles/webvtt/', [], $queryParams, null, true);

        return ObjectMapper::map($response, WebVttConfigurationPaginationResponse::class);
    }
}
