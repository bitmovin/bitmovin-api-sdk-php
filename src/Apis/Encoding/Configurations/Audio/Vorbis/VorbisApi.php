<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Vorbis;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Vorbis\Customdata\CustomdataApi;

class VorbisApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * VorbisApi constructor.
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
     * Create Vorbis Codec Configuration
     *
     * @param \BitmovinApiSdk\Models\VorbisAudioConfiguration $vorbisAudioConfiguration
     * @return \BitmovinApiSdk\Models\VorbisAudioConfiguration
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\VorbisAudioConfiguration $vorbisAudioConfiguration) : \BitmovinApiSdk\Models\VorbisAudioConfiguration
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/configurations/audio/vorbis', [],  null, $vorbisAudioConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\VorbisAudioConfiguration::class);
    }

    /**
     * Delete Vorbis Codec Configuration
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
        $response = $this->httpWrapper->request('DELETE','/encoding/configurations/audio/vorbis/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Vorbis Codec Configuration Details
     *
     * @param string $configurationId
     * @return \BitmovinApiSdk\Models\VorbisAudioConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $configurationId) : \BitmovinApiSdk\Models\VorbisAudioConfiguration
    {
        $pathParams = [
            'configuration_id' => $configurationId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/configurations/audio/vorbis/{configuration_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\VorbisAudioConfiguration::class);
    }

    /**
     * List Vorbis Configurations
     *
     * @param VorbisAudioConfigurationListQueryParams|null $queryParams
     * @return VorbisAudioConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(VorbisAudioConfigurationListQueryParams $queryParams = null) : VorbisAudioConfigurationPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/configurations/audio/vorbis', [], $queryParams, null, true);

        return ObjectMapper::map($response, VorbisAudioConfigurationPaginationResponse::class);
    }
}
