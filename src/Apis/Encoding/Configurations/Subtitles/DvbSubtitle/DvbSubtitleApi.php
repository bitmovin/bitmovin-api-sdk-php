<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\DvbSubtitle;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\DvbSubtitle\Customdata\CustomdataApi;

class DvbSubtitleApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * DvbSubtitleApi constructor.
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
     * Create DVB-SUB subtitle configuration
     *
     * @param \BitmovinApiSdk\Models\DvbSubtitleConfiguration $dvbSubtitleConfiguration
     * @return \BitmovinApiSdk\Models\DvbSubtitleConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\DvbSubtitleConfiguration $dvbSubtitleConfiguration) : \BitmovinApiSdk\Models\DvbSubtitleConfiguration
    {
        $response = $this->httpWrapper->request('POST', '/encoding/configurations/subtitles/dvb-subtitle', [],  null, $dvbSubtitleConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DvbSubtitleConfiguration::class);
    }

    /**
     * Delete DVB-SUB subtitle configuration
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/configurations/subtitles/dvb-subtitle/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * DVB-SUB subtitle configuration details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\DvbSubtitleConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\DvbSubtitleConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/configurations/subtitles/dvb-subtitle/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DvbSubtitleConfiguration::class);
    }

    /**
     * List DVB-SUB subtitle configurations
     *
     * @param DvbSubtitleConfigurationListQueryParams|null $queryParams
     * @return DvbSubtitleConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(DvbSubtitleConfigurationListQueryParams $queryParams = null) : DvbSubtitleConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations/subtitles/dvb-subtitle', [], $queryParams, null, true);

        return ObjectMapper::map($response, DvbSubtitleConfigurationPaginationResponse::class);
    }
}
